<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostManageController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('all',compact('posts'));
    }
}
