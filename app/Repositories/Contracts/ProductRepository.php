<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface ProductRepository.
 */
interface ProductRepository extends RepositoryInterface
{
    public function firstById($id, $relationship);

    public function isValidKey($array, $key);

    public function buildRelationShip($model, $relationship);

    public function buildLimit($model, $limit, $offset);

    public function buildOrderBy($model, $orderBy);

    public function paginateByFilters($filters, $pageSize, $relationship, $orderBy, $columns);

    public function getAllByFilters($filters, $relationship, $orderBy, $columns);
}
