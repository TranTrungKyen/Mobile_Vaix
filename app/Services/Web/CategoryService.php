<?php

namespace App\Services\Web;

use App\Repositories\Contracts\CategoryRepository;
use App\Services\Contracts\CategoryServiceInterface;

/**
 * Class CategoryService.
 */
class CategoryService implements CategoryServiceInterface
{
    protected $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->orderBy('updated_at', 'desc')->all();
    }
}
