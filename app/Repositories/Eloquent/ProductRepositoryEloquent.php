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
    use RepositoryTraits;

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

        return $model;
    }
}
