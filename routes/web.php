<?php

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
    return view('login');
});
//登陆
Route::group(['prefix'=>'log'],function(){
	Route::get('check','LogController@check');
});
//主菜单
Route::group(['prefix'=>'welcome'],function(){
	Route::get('index','WelcomeController@index');
});
//用户中心
Route::group(['prefix'=>'userCenter'],function(){
	Route::get('index','UserCenterController@index');
});



// Route::get('welcome','WelcomeController@index');
// //用户登陆
// Route::get('log','LogController@check');
// Route::post('log','LogController@check');
