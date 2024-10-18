<?php

namespace App\Services\Contracts;

/**
 * Interface ProductDetailServiceInterface.
 */
interface ProductDetailServiceInterface
{
    public function all($relationship = []);

    public function storeMultiple($dataProductDetailForm, $productId);

    public function updateOrCreateMultiple($request, $productId);

    public function delete($id);

    public function getListProductDetailByName($name);

    public function find($id);
}
