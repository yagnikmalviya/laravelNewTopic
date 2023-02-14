<?php

namespace App\Http\Controllers\Admin\Api;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){

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
            return response()->json(['status' => 401,'message' => $error]);
        }
        //VALIDATION END

        $checkUser = User::where('email', '=', $request->email)->first();
        if(empty($checkUser))
        {
            return response()->json(['status' => 401,'message' => 'Mail Not Found']);
        }

        $credentials = ['email'=>$request->email,'password'=>$request->password];
        if (Auth::attempt($credentials))
        {
            $user = Auth::user();
            // SANCTUM API
            // $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            // PASSPORT API
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;

            return response()->json(['status' => 200,'data' => $success, 'message' => 'Login successful']);
        }
        else
        {
            return response()->json(['status' => 401,'message' => 'Password Not Found']);
        }
    }
}
