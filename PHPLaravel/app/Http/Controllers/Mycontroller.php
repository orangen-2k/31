<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Tests\Unit\ExampleTest;

class Mycontroller extends Controller
{
    public function Xinchao()
    {
        echo 'Xin chào';
    }
    public function Ten($ten)
    {
        echo 'Xin chào: '.$ten;
    }

    public function TestURL(Request $request)
    {
        return $request->path();
    }
    public function URL(Request $request)
    {
        return $request->url();
    }
    public function CheckURL(Request $request)
    {
        if ($request->isMethod('GET')){
            echo 'Đây là phương thức GET';
        } else{
            echo 'Không phải phương thức GET';
        }
    }
    public function Checkmy(Request $request)
    {
        if ($request->is('My*')){
            echo 'Có My';
        } else{
            echo 'Không có My';
        }
    }
    public function postForm(Request $request)
    {
        echo $request->input('HoTen');
    }
    public function setCooki()
    {
        $response = new Response();
        $response->withCookie('Kh','Khoa phạm',0.1,);
        echo 'SetCookie thành công';
        return $response;
    }
    public function getCooki(Request $request)
    {
        echo 'Cookie của bạn là: ';
        return $request->cookie('Kh');
    }
    public function uploadfile(Request $request)
    {
        if ($request->hasFile('myFile')){
            echo 'Có file';
        } else {
            echo 'Chưa có';
        }
    }
    public function uploadfile2(Request $request)
    {
        if ($request->hasFile('myFile')){
            $file = $request->file('myFile');
            $filename = $file->getClientOriginalName('myFile');
            echo $filename;
            $file->move('img',$filename);
        } else {
            echo 'Chưa có';
        }
    }
    public function getJson()
    {
        $array = ['Laravel','Cao','Thành'];
        return response()->json($array);
    }
    public function view()
    {
        return view('view');
    }



    public function viewshow($t)
    {
        return view('view',['show'=>$t]);
    }




    public function blade($bl)
    {
        $khoahoc = "OKOK";
        if ($bl === "laravel"){
            return view('pages.laravel',['khoahoc'=>$khoahoc]);
        }   elseif ($bl === "php"){
            return view('pages.php');
        }   elseif ($bl === "if"){
            return view('pages.ifelse',['khoahoc'=>$khoahoc]);
        }
    }
}
