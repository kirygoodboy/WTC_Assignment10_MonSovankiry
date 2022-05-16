<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRegsiterRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Userscontroller extends Controller
{
    //
    public function login(){
        return view('users.login');
    }

    public function do_login(UserLoginRequest $request){
        $queryUser = User::where('email', '=', $request->get('email'))
            ->limit(1)
            ->first();
        if(empty($queryUser)){
            return back() -> withErrors ([
                'message' => 'User already existed'
            ]);
        }

        if(Hash::check($request->get('password'), $queryUser->password)) {
            Auth::login($queryUser);
            return redirect(url('/'));
        }
        return back() -> withErrors ([
            'message' => 'Invalid credentials'
        ]);
        
    }

    public function register(){
        return view('users.register');
    }

    public function do_register(UserRegsiterRequest $request){
        $queryUser = User::where('email', '=', $request->get('email'))
            ->limit(1)
            ->first();
        if(!empty($queryUser)){
            return back() -> withErrors ([
                'message' => 'User already existed'
            ]);
        }

        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);
        User::create($userData);
        return redirect(route('users.login'));
    }
}
