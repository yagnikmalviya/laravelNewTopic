<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function Login()
    {
        return view('Admin.auth.login');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function LoginInsert(Request $request)
    {
        //VALIDATION START
        $rules = array(
            'email'     => 'required',
            'password'     => 'required',
        );

        $validatorMesssages = array(
            'email.required'=>'Please Enter Email.',
            'password.required'=>'Please Enter Password.',
        );

        $validator = Validator::make($request->all(), $rules, $validatorMesssages);

        if ($validator->fails()) {

            $error=json_decode($validator->errors());
            return response()->json(['status' => 401,'error1' => $error]);
        }
        //VALIDATION END

        $checkUser = User::where('email', '=', $request->email)->first();
            if(empty($checkUser))
            {
                $error= 'Mail Not Found';
                return response()->json(['status' => 401,'error1' => $error]);
            }

        $credentials = ['email'=>$request->email,'password'=>$request->password];
        if (Auth::attempt($credentials))
        {
            $redirect = route('dashboard');
            return response()->json(['status' => 1,'data' => "", 'redirect' => $redirect]);
        }
        else
        {
            $error= 'Password Not Found';
            return response()->json(['status' => 401,'error1' => $error]);
            $redirect = route('login');
            return response()->json(['status' => 1,'data' => "", 'redirect' => $redirect]);
        }

    }
}
