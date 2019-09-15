<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    public function index(){

        $posts = User::find(Auth::id())->posts()->paginate(2);
        //return response()->json($posts);
        return view('user.showPost',compact('posts'));

    }

    public function post(){

        User::find(Auth::id())->posts()->create([
            'name' => request('name'),
            'post' => request('post')
        ]);
        return redirect()->route('user.post')->with('postSuccess','Successfully Posted');
    }

    public function showPost(){
        return view('user.post',compact('posts'));
    }
}
