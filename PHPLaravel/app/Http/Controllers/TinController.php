<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;
class TinController extends Controller
{
    //
    public function index(){
        $tin = Tin::where('id','>=','4')->paginate(5);
        return view('tin',['tin'=>$tin]);
    }
}
