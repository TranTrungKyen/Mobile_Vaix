<?php

namespace App\Services\Contracts;

/**
 * Interface ProductDetailServiceInterface.
 */
interface ProductDetailServiceInterface
{
    public function storeMultiple($dataProductDetailForm, $productId);
}
