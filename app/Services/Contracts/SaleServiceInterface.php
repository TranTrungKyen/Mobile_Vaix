<?php

namespace App\Services\Contracts;

/**
 * Interface SaleServiceInterface.
 */
interface SaleServiceInterface
{
    public function all();

    public function store($request);

    public function storeProductDetailSale($request, $saleId);

    public function delete($id);

    public function find($id);
}
