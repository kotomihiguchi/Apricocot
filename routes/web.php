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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function() {
//ブログ
Route::get('news/create', 'Admin\BlogController@add');
Route::post('news/create', 'Admin\BlogController@create');
Route::post('news/edit', 'Admin\BlogController@edit');
Route::post('news/edit', 'Admin\BlogController@update');
Route::post('news/delete', 'Admin\BlogController@delete');
//カート
Route::get('news/create', 'Admin\CartController@add');
Route::post('news/create', 'Admin\CartController@create');
Route::post('news/edit', 'Admin\CartController@edit');
Route::post('news/edit', 'Admin\CartController@update');
Route::post('news/delete', 'Admin\CartController@delete');
//お気に入り
Route::get('news/create', 'Admin\FavController@add');
Route::post('news/create', 'Admin\FavController@create');
Route::post('news/edit', 'Admin\FavController@edit');
Route::post('news/edit', 'Admin\FavController@update');
Route::post('news/delete', 'Admin\FavController@delete');
//問い合わせ
Route::get('news/create', 'Admin\InquiyController@add');
Route::post('news/create', 'Admin\InquiyController@create');
Route::post('news/edit', 'Admin\InquiyController@edit');
Route::post('news/edit', 'Admin\InquiyController@update');
Route::post('news/delete', 'Admin\InquiyController@delete');
//商品
Route::get('news/create', 'Admin\ItemController@add');
Route::post('news/create', 'Admin\ItemController@create');
Route::post('news/edit', 'Admin\ItemController@edit');
Route::post('news/edit', 'Admin\ItemController@update');
Route::post('news/delete', 'Admin\ItemController@delete');
//仕事依頼
Route::get('news/create', 'Admin\JobController@add');
Route::post('news/create', 'Admin\JobController@create');
Route::post('news/edit', 'Admin\JobController@edit');
Route::post('news/edit', 'Admin\JobController@update');
Route::post('news/delete', 'Admin\JobController@delete');
//管理者
Route::get('news/create', 'Admin\LandlordController@add');
Route::post('news/create', 'Admin\LandlordController@create');
Route::post('news/edit', 'Admin\LandlordController@edit');
Route::post('news/edit', 'Admin\LandlordController@update');
Route::post('news/delete', 'Admin\LandlordController@delete');
//トップ
Route::get('news/create', 'Admin\TopController@add');
Route::post('news/create', 'Admin\TopController@create');
Route::post('news/edit', 'Admin\TopController@edit');
Route::post('news/edit', 'Admin\TopController@update');
Route::post('news/delete', 'Admin\TopController@delete');
//ユーザー
Route::get('news/create', 'Admin\UserController@add');
Route::post('news/create', 'Admin\UserController@create');
Route::post('news/edit', 'Admin\UserController@edit');
Route::post('news/edit', 'Admin\UserController@update');
Route::post('news/delete', 'Admin\UserController@delete');
});