<?php

namespace App\Repositories\Eloquent;

use App\Models\ProductDetail;
use App\Repositories\Contracts\ProductDetailRepository;
use App\Repositories\Traits\RepositoryTraits;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ProductDetailRepositoryEloquent.
 */
class ProductDetailRepositoryEloquent extends BaseRepository implements ProductDetailRepository
{
    use RepositoryTraits;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductDetail::class;
    }

    public function buildQuery($model, $filters)
    {
        return $model;
    }

    public function findProductDetailsByProductName($name)
    {
        return $this->model->with(['product', 'color', 'storage'])
            ->whereHas('product', function ($query) use ($name) {
                $query->where('name', 'like', '%' . $name . '%')
                    ->whereNull('deleted_at');
            })->orderBy('updated_at', 'desc')
            ->get();
    }
}
