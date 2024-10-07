<?php

namespace App\Services\Contracts;

/**
 * Interface ProductServiceInterface.
 */
interface ProductServiceInterface
{
    public function all();

    public function store($data);
}
