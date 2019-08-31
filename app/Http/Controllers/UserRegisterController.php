<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index(){

        return view('user.register');
    }

    public function register(){




        $this->validate(request(),[
            'username' => 'required|alpha_dash',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'image' => 'max:2048',
            'gender' => 'required'
        ]);

        if(request()->hasFile('image')){
            $imageName = uniqid().'.jpg';
            request()->file('image')->move('image/',$imageName);
            User::create([
                'username' => request('username'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'image' => $imageName,
                'gender' => request('gender')
            ]);
        }else{
            User::create([
                'username' => request('username'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'gender' => request('gender')
            ]);
        }

        return 'Registered Succesful';

    }
}
