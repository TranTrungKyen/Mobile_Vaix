<?php

namespace App\Services\Web;

use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Support\Facades\Auth;

/**
 * Class AuthAdminService.
 */
class AuthService implements AuthServiceInterface
{
    public function login($request)
    {
        $params = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $notification = [
            'status' => false,
            'message' => __('content.login_form.message.error'),
        ];

        if (Auth::attempt($params)) {
            $request->session()->regenerate();

            $redirectLink = route('admin.dashboard');
            if(auth()->user()->role_id == ROLES['user']) {
                $redirectLink = route('home');
            }

            $notification = [
                'status' => true,
                'redirectRoute' => $redirectLink,
                'message' => __('content.login_form.message.success'),
            ];
        }

        return $notification;
    }

    public function logout ($request)
    {
        $isLogout = false;

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $isLogout = true;

        return $isLogout;
    }
}
