<?php

namespace App\Services\Web;

use App\Services\Contracts\AuthAdminServiceInterface;
use Illuminate\Support\Facades\Auth;

/**
 * Class AuthAdminService.
 */
class AuthAdminService implements AuthAdminServiceInterface
{
    public function login($request)
    {
        $params = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($params)) {
            $request->session()->regenerate();

            return true;
        }

        return false;
    }
}
