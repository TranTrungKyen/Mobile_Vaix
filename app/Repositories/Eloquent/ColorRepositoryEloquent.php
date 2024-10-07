<?php

namespace App\Repositories\Eloquent;

use App\Models\Color;
use App\Repositories\Contracts\ColorRepository;
use App\Repositories\Traits\RepositoryTraits;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ColorRepositoryEloquent.
 */
class ColorRepositoryEloquent extends BaseRepository implements ColorRepository
{
    use RepositoryTraits;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Color::class;
    }

    public function buildQuery($model, $filters)
    {
        //
    }
}
