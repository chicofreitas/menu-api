<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * login
     * @param Request $request
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (! Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => [
                    __('auth.failed')
                ]
            ]);
            
        }
        return $request->user();
    }

    /**
     * logout
     * @param Request $request
     */
    public function logout(Request $request)
    {
        return Auth::logout();
    }
}
