<?php

namespace App\Services\Web;

use App\Repositories\Contracts\ProductRepository;
use App\Services\Contracts\ProductServiceInterface;
use App\Traits\FileTrait;
use Faker\Core\File;

/**
 * Class ProductService.
 */
class ProductService implements ProductServiceInterface
{
    use FileTrait {
        delete as traitDelete;
    }

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

    public function delete($id)
    {
        $imagesCollection = $this->repository->find($id)->images;
        $images = [];
        foreach ($imagesCollection as $item) {
            if ($this->exists($item->url) && !is_dir($item->url)) {
                $images[] = $item->url;
            }
        }
        $this->traitDelete($images);
        return $this->repository->delete($id);
    }
}
