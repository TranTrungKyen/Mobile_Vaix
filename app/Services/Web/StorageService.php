<?php

namespace App\Services\Web;

use App\Repositories\Contracts\StorageRepository;
use App\Services\Contracts\StorageServiceInterface;

/**
 * Class StorageService.
 */
class StorageService implements StorageServiceInterface
{
    protected $repository;

    public function __construct(StorageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->orderBy('updated_at', 'desc')->all();
    }
}
