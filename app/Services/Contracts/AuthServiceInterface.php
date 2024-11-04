<?php

namespace App\Services\Contracts;

/**
 * Interface AuthAdminServiceInterface.
 */
interface AuthServiceInterface
{
    public function login($request);

    public function logout ($request);
}
