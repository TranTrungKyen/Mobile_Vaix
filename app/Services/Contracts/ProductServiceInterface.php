<?php

namespace App\Services\Contracts;

/**
 * Interface ProductServiceInterface.
 */
interface ProductServiceInterface
{
    public function all($relationship);

    public function store($data);

    public function find($id);

    public function delete($id);

    public function update($request, $id);

    public function paginateByFilters($filters, $pageSize, $relationship, $orderBy, $columns);

    public function findByField($fieldName, $value);

    public function getAllByFilters($filters, $relationship, $orderBy, $columns);
}
