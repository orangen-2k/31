<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(){
        $user = User::all();
        return view('admin.user.show',['user'=>$user]);
    }
    public function add(){
        return view('admin.user.add');
    }
    public function update(){
        return view('admin.user.update');
    }
}
