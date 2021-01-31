<?php

namespace App\Http\Controllers;

use App\Tintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{

    // Truyền đến màn login.blade.php
    public function getlogin(){
        return view('passport.login');
    }

    // Truyền đến màn admin.blade.php
    public function admin()
    {
        return view('admin.admin');
    }

    // Truyền đến màn forgot.blade.php
    public function forgot()
    {
        return view('passport.forgot');
    }

    // Kiểm tra đăng nhập truyền đến màn admin.blade.php hoặc màn user.blade.php
    public function postlogin(Request $request){
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required',
            ],
            [
                'email.required'=>'Bạn chưa nhập tài khoản',
                'password.required'=>'Bạn chưa nhập mật khẩu',
            ]
        );
        $email =  $request['email'];
        $password =  $request['password'];
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            $news = Tintuc::orderBy('id','desc')->get();
            return redirect()->route('admin',['News'=>$news]);
        }elseif (Auth::attempt(['email'=>$email,'password'=>$password])){
            $news = Tintuc::orderBy('id','desc')->get();
            return redirect()->route('home',['News'=>$news]);
        }  else{
            return redirect()->route('login')->with('Error','Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    // Đăng xuất đến màn login.blade.php
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
