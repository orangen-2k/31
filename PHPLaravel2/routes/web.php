<?php

use Illuminate\Support\Facades\Route;
use App\Theloai;
// admin va user
Route::get('','PassportController@admin')->name('admin')->middleware('checklogin');
Route::get('admin/home','PassportController@admin')->name('admin.home')->middleware('checklogin');

Route::get('login','PassportController@getlogin')->name('login');
Route::post('login','PassportController@postlogin')->name('login');
Route::get('logout','PassportController@logout')->name('logout');
Route::get('forgot','PassportController@forgot')->name('forgot');

Route::group(['prefix'=>'admin','middleware'=>'checklogin'],function (){

    Route::group(['prefix'=>'category'],function (){
        Route::get('show','CategoryController@getshow')->name('show.category');

        Route::get('add','CategoryController@getadd')->name('add.category');
        Route::post('add','CategoryController@postadd')->name('add.category');

        Route::get('update/{id}','CategoryController@getupdate')->name('update.category');
        Route::post('update/{id}','CategoryController@postupdate')->name('update.category');

        Route::get('delete/{id}','CategoryController@getdelete')->name('delete.category');
    });

    Route::group(['prefix'=>'type_of_news'],function (){
        Route::get('show','LoaitinController@getshow')->name('show.type_of_news');

        Route::get('add','LoaitinController@getadd')->name('add.type_of_news');
        Route::post('add','LoaitinController@postadd')->name('add.type_of_news');

        Route::get('update/{id}','LoaitinController@getupdate')->name('update.type_of_news');
        Route::post('update/{id}','LoaitinController@postupdate')->name('update.type_of_news');

        Route::get('delete/{id}','LoaitinController@getdelete')->name('delete.type_of_news');
    });

    Route::group(['prefix'=>'news'],function (){
        Route::get('show','TintucController@getshow')->name('show.news');

        Route::get('add','TintucController@getadd')->name('add.news');
        Route::post('add','TintucController@postadd')->name('add.news');

        Route::get('update/{id}','TintucController@getupdate')->name('update.news');
        Route::post('update/{id}','TintucController@postupdate')->name('update.news');

        Route::get('delete/{id}','TintucController@getdelete')->name('delete.news');
    });

    Route::group(['prefix'=>'comment'],function (){
        Route::get('delete/{id}/{idtintuc}','CommentController@getdelete')->name('delete.comment');
    });

    Route::group(['prefix'=>'/news/admin/ajax'],function (){
        Route::get('loaitin/{idtheloai}','AjaxController@getloaitin')->name('show.ajax');
    });

    Route::group(['prefix'=>'slide'],function (){
        Route::get('show','SlideController@getshow')->name('show.slide');

        Route::get('add','SlideController@getadd')->name('add.slide');
        Route::post('add','SlideController@postadd')->name('add.slide');

        Route::get('update/{id}','SlideController@getupdate')->name('update.slide');
        Route::post('update/{id}','SlideController@postupdate')->name('update.slide');

        Route::get('delete/{id}','SlideController@getdelete')->name('delete.slide');
    });

    Route::group(['prefix'=>'user'],function (){
        Route::get('show','UserController@getshow')->name('show.user');

        Route::get('add','UserController@getadd')->name('add.user');
        Route::post('add','UserController@postadd')->name('add.user');

        Route::get('update/{id}','UserController@getupdate')->name('update.user');
        Route::post('update/{id}','UserController@postupdate')->name('update.user');

        Route::get('delete/{id}','UserController@getdelete')->name('delete.user');
    });
});

Route::get('user','UserwebsiteController@gethome')->name('home');
Route::get('user/home','UserwebsiteController@gethome')->name('show.home');
Route::get('detail/home/{id}/{tinkhongdau}.html','UserwebsiteController@getdetail')->name('detail.home');
Route::get('loaitin/home/{id}/{tenkhongdau}.html','UserwebsiteController@getloaitin')->name('loaitin.home');
Route::get('userhome/home','UserwebsiteController@getuserhome')->name('user.home');
Route::post('userhome/home','UserwebsiteController@postuserhome')->name('user.home');
Route::get('userhomedetail/home','UserwebsiteController@getuserhomedetail')->name('userdetail.home');
Route::post('timkiem','UserwebsiteController@gettimkiem')->name('timkiem.home');

Route::post('comment/home/{id}','CommentController@postcomment')->name('comment.home');

?>
