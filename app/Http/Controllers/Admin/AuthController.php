<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        return view('Admin.auth.login');
    }

    public function LoginInsert(Request $request)
    {
        dd($request->all());
    }
}
