<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepository;
use App\Repositories\Traits\RepositoryTraits;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ProductRepositoryEloquent.
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function buildQuery($model, $filters)
    {
        if ($this->isValidKey($filters, 'filter') && $this->isValidKey($filters['filter'], 'name')) {
            $name = searchSpecialCharacters($filters['filter']['name']);
            $model = $model->where('name', 'like', '%' . @$name . '%');
        }

        if ($this->isValidKey($filters, 'filter') && $this->isValidKey($filters['filter'], 'category_id')) {
            $categoryId = searchSpecialCharacters($filters['filter']['category_id']);
            $model = $model->where('category_id', @$categoryId);
        }

        return $model;
    }

    /**
     * @param array $filters
     * @param array $relationship
     * @param array $orderBy
     * @return \Illuminate\Database\Eloquent\Collection | null
     */
    public function getAllByFilters($filters = [], $relationship = [], $orderBy = [], $columns = '*')
    {
        $this->applyCriteria();
        $this->applyScope();

        $model = $this->model;
        $model = $this->buildQuery($model, $filters);
        $model = $this->buildRelationShip($model, $relationship);
        $model = $this->buildOrderBy($model, $orderBy);
        $model = $model->get($columns);

        $this->resetModel();

        return $this->parserResult($model);
    }

    /**
     * @param array $filters
     * @param int $pageSize
     * @param array $relationship
     * @param array $orderBy
     * @return \Illuminate\Pagination\LengthAwarePaginator | null
     */
    public function paginateByFilters(
        $filters = [],
        $pageSize = 10,
        $relationship = [],
        $orderBy = ['id' => 'desc'],
        $columns = '*'
    ) {
        $this->applyCriteria();
        $this->applyScope();

        $model = $this->model;
        $model = $this->buildQuery($model, $filters);
        $model = $this->buildRelationShip($model, $relationship);
        $model = $this->buildOrderBy($model, $orderBy);
        $model = $model->paginate($pageSize, $columns);

        $this->resetModel();

        return $this->parserResult($model);
    }

    /**
     * @param array $orderBy
     * @return \Illuminate\Database\Eloquent\Model
     */
    private function buildOrderBy($model, $orderBy = [])
    {
        if (!empty($orderBy)) {
            foreach ($orderBy as $column => $direction) {
                if ($column && $direction) {
                    $model = $model->orderBy($column, $direction);
                }
            }
        }

        return $model;
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return \Illuminate\Database\Eloquent\Model
     */
    private function buildLimit($model, $limit = 10, $offset = 0)
    {
        return $model->limit($limit)->offset($offset);
    }

    /**
     * @param array $relationship
     * @return \Illuminate\Database\Eloquent\Model
     */
    private function buildRelationShip($model, $relationship = [])
    {
        if (!empty($relationship)) {
            $model = $model->with($relationship);
        }

        return $model;
    }

    private function isValidKey($array, $key)
    {
        return array_key_exists($key, $array) && !is_null($array[$key]);
    }
}
