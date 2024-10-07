<?php

namespace App\Repositories\Eloquent;

use App\Models\Image;
use App\Repositories\Contracts\ImageRepository;
use App\Repositories\Traits\RepositoryTraits;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ImageRepositoryEloquent.
 */
class ImageRepositoryEloquent extends BaseRepository implements ImageRepository
{
    use RepositoryTraits;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Image::class;
    }

    public function storeImages($imageable, array $images)
    {
        return $imageable->images()->createMany($images);
    }

    public function buildQuery($model, $filters)
    {
        return $model;
    }
}
