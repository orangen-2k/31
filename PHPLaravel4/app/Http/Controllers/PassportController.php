<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    // Truyền đến màn admin.blade.php
    public function admin()
    {
        return view('admin.admin');
    }

    // Truyền đến màn .blade.php
    public function user()
    {
        return view('user.user');
    }

    // Truyền đến màn forgot.blade.php
    public function forgot()
    {
        return view('passport.forgot');
    }

    // Truyền đến màn login.blade.php
    public function getlogin(){
        return view('passport.login');
    }

    // Kiểm tra đăng nhập truyền đến màn admin.blade.php hoặc màn user.blade.php
    public function postlogin(Request $request){
        $email =  $request['email'];
        $password =  $request['password'];
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect('admin/user/show');
        }elseif (Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect('user');
        }  else{
            return view('passport/login',['error'=>"Đăng nhập thất bại"]);
        }
    }

    // Đăng xuất đến màn login.blade.php
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
