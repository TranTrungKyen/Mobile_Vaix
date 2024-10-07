<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Traits\RepositoryTraits;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class CategoryRepositoryEloquent.
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    use RepositoryTraits;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    public function buildQuery($model, $filters)
    {
        //
    }
}
