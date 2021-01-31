<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;

// admin va user
Route::get('','PassportController@admin')->name('admin')->middleware('checklogin');
Route::get('admin/home','PassportController@admin')->name('admin.home')->middleware('checklogin');
Route::get('user','PassportController@user')->name('user') ->middleware('checklogin');
Route::get('user/home','PassportController@user')->name('user.home')->middleware('checklogin');

Route::get('forgot','PassportController@forgot');
Route::get('login','PassportController@getlogin');
Route::post('login','PassportController@postlogin');
Route::get('logout','PassportController@logout');

Route::group(['prefix'=>'admin','middleware'=>'checklogin'],function (){
    Route::group(['prefix'=>'user'],function (){
        Route::get('/show','UserController@show')->name('show');

        Route::get('/update','UserController@update')->name('update');

        Route::get('/add','UserController@add')->name('add');
    });
});

?>
