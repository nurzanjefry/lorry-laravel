<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

        //check user
        $user = User::where('name',$request->username)->first();
        if (Hash::check($request->password, $user->password)) {
            session()->put('u_i', $user->id);
            session()->put('u_n', $user->name);
            return redirect('/post/index');
        } else {
            return redirect('/login');
        }
    }
}
