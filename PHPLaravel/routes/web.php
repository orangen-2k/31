<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('postForm');
});


Route::get('/Laravel/Say', function () {
    return 'Hello';
});


Route::get('/Laravel/Ten/{ten}', function ($ten) {
    return "Ho ten: ".$ten;
});


Route::get('/Laravel/Ngay/{ngay}', function ($ngay) {
    return "Ngay sinh: ".$ngay;
});

// regular expression
Route::get('/Laravel/Ngay2/{ngay}', function ($ngay) {
    return "Ngay sinh: ".$ngay;
})->where(['ngay'=>'[a-zA-Z]+']);

// dinh danh

Route::get('Router',['as'=>'MyRouter',function(){
    echo 'hello myrouter';
}]);


Route::get('Router2',function(){
    echo 'hello myrouter2';
})->name('Myrouter2');

Route::get('goiten',function(){
    return redirect()->route('MyRouter');
});

Route::get('goiten2',function(){
    return redirect()->route('Myrouter2');
});

Route::group(['prefix'=>'Mygroup'],function (){
    Route::get('User1',function (){
        echo "User1";
    });
    Route::get('User2',function (){
        echo "User2";
    });
    Route::get('User3',function (){
        echo "User3";
    });
});

Route::get('/Chao','App\Http\Controllers\Mycontroller@Xinchao');
Route::get('/Ten/{ten}', 'App\Http\Controllers\Mycontroller@Ten');
Route::get('/Url', 'App\Http\Controllers\Mycontroller@TestURL');
Route::get('/UrlAll', 'App\Http\Controllers\Mycontroller@URL');
Route::get('/Checkrul', 'App\Http\Controllers\Mycontroller@CheckURL');
Route::get('/Checkmy', 'App\Http\Controllers\Mycontroller@Checkmy');

// gui dữ  liệu request
Route::get('getForm',function (){
   return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'App\Http\Controllers\Mycontroller@postForm']);


Route::get('/setcookie', 'App\Http\Controllers\Mycontroller@setCooki');
Route::get('/getcookie', 'App\Http\Controllers\Mycontroller@getCooki');

Route::get('uploadfile',function (){
    return view('postFile');
});

Route::post('postFile',['as'=>'postFile','uses'=>'App\Http\Controllers\Mycontroller@uploadfile2']);


Route::get('getJson','App\Http\Controllers\Mycontroller@getJson');

Route::get('Myview','App\Http\Controllers\Mycontroller@view');
Route::get('viewShow/{t}','App\Http\Controllers\Mycontroller@viewshow');

View::share('Share','Share roai');


Route::get('laravel',function (){
    return view('pages.laravel');
});

Route::get('php',function (){
    return view('pages.php');
});

Route::get('blade/{bl}','App\Http\Controllers\Mycontroller@blade');


Route::get('database',function (){
//   Schema::create('loaisanpham',function ($table){
//      $table->increments('id');
//      $table->string('ten',200);
//   });

    Schema::create('theloai',function ($table){
        $table->increments('id');
        $table->string('ten',200)->nullable;
        $table->string('nxs')->default('Nha san xuat');
    });
   echo 'Da tao bang';
});

Route::get('lienketbang',function (){
   Schema::create('san pham',function ($table){
      $table->increments('id');
      $table->string('ten');
      $table->float('gia');
      $table->integer('soluong')->default(0);
      $table->integer('id_loaisanpham')->unsigned();
      $table->foreign('id_loaisanpham')->references('id')->on('loaisanpham');
   });
});

Route::get('suabang',function (){
    Schema::table('theloai',function($table){
        $table->dropColumn('nxs');
    });
});

Route::get('thembang',function (){
    Schema::table('theloai',function($table){
        $table->string('nsx');
    });
});

    Route::get('doiten',function (){
    Schema::rename('theloai2','theloai');
    echo 'ok';
});

Route::get('xoabang',function (){
    Schema::dropifExists('theloai');
    echo 'OKOK';
});


Route::get('bd/get',function (){
    $data = DB::table('users')->get();
//   var_dump($data);
    foreach ($data as $row){
        foreach ($row as $key=>$value){
            echo $key.":".$value."<br/>";
        }
        echo "<hr/>";
    }
});


Route::get('bd/where',function (){
    $data = DB::table('users')->where('id','=',14)->get();
//   var_dump($data);
    foreach ($data as $row){
        foreach ($row as $key=>$value){
            echo $key.":".$value."<br/>";
        }
        echo "<hr/>";
    }
});


Route::get('bd/slect',function (){
    $data = DB::table('users')->select(['id','name','email'])->where('id',14)->get();
//   var_dump($data);
    foreach ($data as $row){
        foreach ($row as $key=>$value){
            echo $key.":".$value."<br/>";
        }
        echo "<hr/>";
    }
});


Route::get('bd/raw',function (){
    $data = DB::table('users')->select(DB::raw('id,name as hoten,email'))->where('id',14)->get();
//   var_dump($data);
    foreach ($data as $row){
        foreach ($row as $key=>$value){
            echo $key.":".$value."<br/>";
        }
        echo "<hr/>";
    }
});


Route::get('bd/oderby',function (){
    $data = DB::table('users')->select(DB::raw('id,name as hoten,email'))
        ->where('id','>',2)->orderBy('id','desc')->get();
//   var_dump($data);
    foreach ($data as $row){
        foreach ($row as $key=>$value){
            echo $key.":".$value."<br/>";
        }
        echo "<hr/>";
    }
});


Route::get('bd/skip',function (){
    $data = DB::table('users')->select(DB::raw('id,name as hoten,email'))
        ->where('id','>',1)->orderBy('id','asc')->skip(1)->take(5)->get();
//   var_dump($data);
    echo $data->count();
//    foreach ($data as $row){
//        foreach ($row as $key=>$value){
//            echo $key.":".$value."<br/>";
//        }
//        echo "<hr/>";
//    }
});

Route::get('bd/update',function (){
    DB::table('users')->where('id',13)->update(['name'=>'website','email'=>'email.com']);
    echo 'Done';
});

Route::get('bd/delete',function (){
    DB::table('users')->where('id',13)->delete();
    echo 'Done';
});

Route::get('model/save',function (){
    $user = new App\Models\User();
    $user->name = "Mai";
    $user->email = "Mai@gmail.com";
    $user->password = "123";
    $user->save();
    echo 'done nhe';
});

Route::get('model/get',function (){
    $user = App\Models\User::find(14);
    echo $user->name."<br/>";
    echo $user->email."<br/>";
    echo  $user->password."<br/>";
    echo 'done nhe';
});


Route::get('model/spsave',function (){
    $sanpham= new App\Models\loaisanpham();
    $sanpham->ten = "Mai2";
    $sanpham->save();
    echo 'done nhe';
});
Route::get('model/spsaveao/{ten}',function ($ten){
    $sanpham= new App\Models\loaisanpham();
    $sanpham->ten = $ten;
    $sanpham->save();
    echo 'done nhe';
});


Route::get('model/all',function (){
    $sanpham1=  App\Models\loaisanpham::all()->toJson();
    $sanpham2=  App\Models\loaisanpham::all()->toArray();
    var_dump($sanpham1)."<br/>";
    var_dump($sanpham2);
//    foreach ($sanpham as $row){
//        foreach ($row as $key=>$value){
//            echo $key.":".$value."<br/>";
//        }
//        echo "<hr/>";
//    }
    echo 'done nhe';
});



Route::get('model/spten',function (){
    $sanpham= App\Models\loaisanpham::where('ten','Mai')->get()->toArray();
    echo $sanpham[0]['ten'];
});


Route::get('model/spxoa',function (){
    App\Models\loaisanpham::destroy(2);
    echo 'aok';
});



Route::get('lienket/get',function (){
    $data =  App\Models\sanpham::find(0)->loaisanpham->toArray();
    var_dump($data);
});

Route::get('lienketlsp/get',function (){
    $data =  App\Models\loaisanpham::find(0)->sanpham->toArray();
    var_dump($data);
});


Route::get('diem',function (){
    echo 'Ban du diem';
})->middleware('Mymidde');


Route::get('loi',function (){
    echo 'Ban ko du diem';
})->name('loi');



Route::get('nhapdiem',function (){
    return view('nhapdiem');
})->name('nhapdiem');


Route::get('dangnhap',function (){
    return view('dangnhap');
});

Route::get('thu',function (){
    return view('thanhcong');
});

Route::post('login','App\Http\Controllers\AuthController@login')->name('login');

Route::get('logout','App\Http\Controllers\AuthController@logout');

Route::group(['middeleware'=>['web']],function (){
   Route::get('Session',function (){
      Session::put('Khoahoc','Laravel');
      echo "ok ssss";
      echo "<br/>";
      Session::forget('Khoahoc');
      echo Session::get('Khoahoc');
       echo "<br/>";
      if (Session::has('Khoahoc'))
          echo "có rồi";
      else
          echo "ko có";
   });
});



Route::get('tin','App\Http\Controllers\TinController@index');
