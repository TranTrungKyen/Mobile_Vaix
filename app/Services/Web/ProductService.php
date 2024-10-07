<?php

namespace App\Services\Web;

use App\Repositories\Contracts\ProductRepository;
use App\Services\Contracts\ProductServiceInterface;

/**
 * Class ProductService.
 */
class ProductService implements ProductServiceInterface
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->orderBy('updated_at', 'desc')->all();
    }

    public function store($data)
    {
        return $this->repository->create($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }
}
