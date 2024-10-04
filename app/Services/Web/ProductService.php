<?php

namespace App\Services\Web;

use App\Repositories\Contracts\ProductRepository;
use App\Services\Contracts\ProductServiceInterface;

/**
 * Class ProductService.
 *
 * @package namespace App\Services\Web;
 */
class ProductService implements ProductServiceInterface
{
    protected $repository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function all()
    {
        return $this->repository->orderBy('updated_at', 'desc')->all();
    }
}
