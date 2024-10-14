<?php

namespace App\Services\Contracts;

/**
 * Interface ProductServiceInterface.
 */
interface ProductServiceInterface
{
    public function all($relationship = []);

    public function store($data);

    public function find($id);

    public function delete($id);

    public function update($request, $id);

    public function paginateByFilters(
        $filters = [],
        $pageSize = 10,
        $relationship = [],
        $orderBy = ['id' => 'desc'],
        $columns = '*'
    );
}
