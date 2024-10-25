<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Services\Contracts\AuthAdminServiceInterface;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    protected $service;

    public function __construct(AuthAdminServiceInterface $service)
    {
        $this->service = $service;
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        $notification = [
            'status' => false,
            'redirectRoute' => route('admin.login'),
            'message' => __('content.login_form.message.error'),
        ];
        try {
            $isSuccess = $this->service->login($request);
            if ($isSuccess) {
                $notification = [
                    'status' => true,
                    'redirectRoute' => route('admin.dashboard'),
                    'message' => __('content.login_form.message.success'),
                ];
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }

        return response()->json($notification);
    }
}
