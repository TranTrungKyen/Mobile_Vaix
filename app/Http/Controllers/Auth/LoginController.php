<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $service;

    public function __construct(AuthServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        return $this->service->login($request);
    }

    public function logout (Request $request)
    {
        if(!$this->service->logout($request)) {
            return redirect()->back()->with('error', __('content.common.logout_error'));
        }

        return redirect()->route('auth.login')->with('success', __('content.common.logout_success'));
    }
}
