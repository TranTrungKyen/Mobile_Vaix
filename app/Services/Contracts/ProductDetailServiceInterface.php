<?php

namespace App\Services\Contracts;

/**
 * Interface ProductDetailServiceInterface.
 */
interface ProductDetailServiceInterface
{
    public function storeMultiple($dataProductDetailForm, $productId);

    public function updateOrCreateMultiple($request, $productId);

    public function delete($id);
}
