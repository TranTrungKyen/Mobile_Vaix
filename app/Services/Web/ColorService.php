<?php

namespace App\Services\Web;

use App\Repositories\Contracts\ColorRepository;
use App\Services\Contracts\ColorServiceInterface;

/**
 * Class ColorService.
 */
class ColorService implements ColorServiceInterface
{
    protected $repository;

    public function __construct(ColorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->orderBy('updated_at', 'desc')->all();
    }
}
