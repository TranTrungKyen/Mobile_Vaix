<?php

namespace App\Services\Contracts;

/**
 * Interface ProductServiceInterface.
 */
interface ProductServiceInterface
{
    public function all();

    public function store($data);

    public function find($id);

    public function delete($id);

    public function update($request, $id);
}
