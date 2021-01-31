<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Theloai;
use App\Loaitin;
use App\Tintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserwebsiteController extends Controller
{
    //
    function __construct(){
        $category = Theloai::all();
        $slide = Slide::all();
        view()->share('Category', $category);
        view()->share('Slide', $slide);
        if (Auth::check()){
            view()->share('Nguoidung',Auth::user());
        }
    }
    //
    public function gethome(Request $request){
        if($request->keyword){

            $theloaihome = Theloai::where(
                'ten', 'like', "%".$request->keyword."%"
            )->paginate(7);
            $theloaihome->withPath('?keyword=' . $request->keyword);
        }else{
            $theloaihome = Theloai::orderBy('id','desc')->paginate(7);
        }
        return view('user.tintuc.home', ['Theloaihome' => $theloaihome,'keyword' => $request->keyword]);
    }
    //
    public function getdetail($id){
        $tintuc = Tintuc::find($id);
        $tinnoibat = Tintuc::where('noibat', 1)->take(2)->get();
        $tinlienqua = Tintuc::where('idloaitin',$tintuc->idloaitin)->take(2)->get();
        return view('user.tintuc.detail',['Tintuc'=>$tintuc,'Tinnoibat'=>$tinnoibat,'Tinlienquan'=>$tinlienqua]);
    }
    //
    public function getloaitin($id){
        $loaitin = Loaitin::find($id);
        $tintuc = Tintuc::where('idloaitin',$id)->paginate(7);
        return view('user.tintuc.loaitin',['Loaitin'=>$loaitin,'Tintuc'=>$tintuc]);
    }
    //
    public function getuserhome(){
        $user = Auth::user();
        return view('user.user-home.user',['Nguoidung'=>$user]);
    }
    //
    public function getuserhomedetail(){
        return view('user.user-home.user-detail');
    }
    //
    public function gettimkiem(Request $request){
        $tukhoa = $request->Tukhoa;
        $tintuc = Tintuc::where('tieude','like',"%$tukhoa%")->orwhere('tomtat','like',"%$tukhoa%")
            ->orwhere('noidung','like',"%$tukhoa%")->take(30)->paginate(7);
        return view('user.tintuc.timkiem',['Tintuc'=>$tintuc,'Tukhoa'=>$tukhoa]);
    }
}
