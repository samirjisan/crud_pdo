<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){


        return view('admin.login');


    }

    public function login(){

        if(Auth::guard('admin')->attempt(['email' => request('email'),'password' => request('password')])){
            return redirect()->route('admin.dashboard');
      //      return 'login successfully';
        }else{
            return redirect()->route('admin.signin')->with('loginRequest','Please login as admin');
        }
    }

    public function logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('admin.signin');

    }

    public function dashboard(){

//        $admins = Auth::guard('admin');

        $admins = Admin::latest()->get();

        return view('admin.showAdmins',compact('admins'));

    }

//    public function posts(){
//
//        $posts = User::find(Auth::id())->posts()->paginate(2);
//        //return response()->json($posts);
//        return view('user.showPost',compact('posts'));
//
//    }
//
//    public function addpost(){
//
//        User::find(Auth::id())->posts()->create([
//            'name' => request('name'),
//            'post' => request('post')
//        ]);
//        return redirect()->route('user.post')->with('postSuccess','Successfully Posted');
//    }
//
//    public function showPost(){
//        return view('user.post',compact('posts'));
//    }


}
