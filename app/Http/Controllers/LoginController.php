<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct(Request $request)
    {
        // unset($request['_token']);
    }

    public function Login(Request $request)
    {
        return view('login.login');
    }

    public function LoginNow(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'    => 'required|string|min:5|max:100',
            'password'    => 'required|string|min:5|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                    ->withErrors($validator)
                    ->withInput();
        }

        //authenticate user
        
        dd($request->all());
    }
}
