<?php

namespace App\Services\Contracts;

/**
 * Interface ImageServiceInterface.
 */
interface ImageServiceInterface
{
    public function storeMultiple($request, $productId);
}
