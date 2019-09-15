<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class AdminManageController extends Controller
{
    public function index(){

        $admins = Admin::latest()->get();
        return view('admin.showAdmins',compact(['admins']));
    }

//    public function edit($id){
//
//        $user = User::find($id);
//        return view('user.edit',compact(['user']));
//    }
//
//    public function update($id){
//        $user = User::find($id);
//        $user->update([
//            'username' => request('username'),
//            'email' => request('email'),
//            'gender' => request('gender')
//        ]);
//        return redirect()->route('user.show')->with('updateSuccess','Successfully Updated');
//
//    }
//
//    public function delete($id){
//
//        User::find($id)->delete();
//        return redirect()->route('user.show')->with('deleteSuccess','Successfully Deleted');
//    }

}
