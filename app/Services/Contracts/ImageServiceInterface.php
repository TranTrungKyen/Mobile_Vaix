<?php

namespace App\Services\Contracts;

/**
 * Interface ImageServiceInterface.
 */
interface ImageServiceInterface
{
    public function delete($id);

    public function deleteMultiple($arrIds);

    public function storeMultiple($request, $productId);
}
