<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Traits\RepositoryTraits;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Contracts\ExampleRepository;

/**
 * Class ExampleRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ExampleRepositoryEloquent extends BaseRepository implements ExampleRepository
{
    use RepositoryTraits;
    
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        //
    }

    public function buildQuery()
    {
        //
    }

}
