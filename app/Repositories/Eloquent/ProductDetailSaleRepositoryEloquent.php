<?php

namespace App\Repositories\Eloquent;

use App\Models\ProductDetailSale;
use App\Repositories\Contracts\ProductDetailSaleRepository;
use App\Repositories\Traits\RepositoryTraits;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ProductDetailSaleRepositoryEloquent.
 */
class ProductDetailSaleRepositoryEloquent extends BaseRepository implements ProductDetailSaleRepository
{
    use RepositoryTraits;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductDetailSale::class;
    }

    public function buildQuery($model, $filters)
    {
        return $model;
    }
}
