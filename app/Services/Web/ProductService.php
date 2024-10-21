<?php

namespace App\Services\Web;

use App\Repositories\Contracts\ProductRepository;
use App\Services\Contracts\ProductServiceInterface;
use App\Traits\FileTrait;

/**
 * Class ProductService.
 */
class ProductService implements ProductServiceInterface
{
    use FileTrait {
        delete as traitDelete;
    }

    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all($relationship = [])
    {
        return $this->repository
            ->with($relationship)
            ->orderBy('updated_at', 'desc')
            ->all();
    }

    public function paginateByFilters(
        $filters = [],
        $pageSize = 12,
        $relationship = [],
        $orderBy = ['updated_at' => 'desc'],
        $columns = '*'
    ) {
        return $this->repository->paginateByFilters($filters, $pageSize, $relationship, $orderBy, $columns);
    }

    public function store($data)
    {
        return $this->repository->create($data);
    }

    public function find($id)
    {
        return $this->repository->firstById($id);
    }

    public function findByField($fieldName, $value)
    {
        return $this->repository->findByField($fieldName, $value);
    }

    public function getAllByFilters(
        $filters = [],
        $relationship = [],
        $orderBy = [],
        $columns = '*'
    ) {
        if ($orderBy['price_original'] ?? '') {
            switch ($orderBy['price_original']) {
                case 'asc':
                    return $this->repository->getAllByFilters($filters, $relationship, [], $columns)->sortBy('price_original');
                case 'desc':
                    return $this->repository->getAllByFilters($filters, $relationship, [], $columns)->sortByDesc('price_original');
                default:
                    break;
            }
        }

        return $this->repository->getAllByFilters($filters, $relationship, $orderBy, $columns);
    }

    public function delete($id)
    {
        $imagesCollection = $this->repository->find($id)->images;
        $images = [];
        foreach ($imagesCollection as $item) {
            if ($this->exists($item->url) && !is_dir($item->url)) {
                $images[] = $item->url;
            }
        }
        $this->traitDelete($images);

        return $this->repository->delete($id);
    }

    public function update($request, $id)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'sim_card' => $request->sim_card,
            'cpu' => $request->cpu,
            'pin' => $request->pin,
            'design_style' => $request->design_style,
            'screen_resolution' => $request->screen_resolution,
            'category_id' => $request->category_id,
            'sub_title' => $request->sub_title,
        ];

        return $this->repository->update($data, $id);
    }

    public function getProductSalesLimit16()
    {
        return $this->repository->all()->sortByDesc(function ($product) {
            return $product->price_current;
        })->take(16);
    }
}
