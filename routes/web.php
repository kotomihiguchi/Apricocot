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

//マルチログイン
//Userログイン後
Route::group(['middleware' => 'auth:user'], function() {
  Route::get('/home', 'HomeController@index')->name('home');
});
//admin認証不要
Route::group(['prefix' => 'admin'], function() {
  Route::get('/',         function () { return redirect('/admin/home'); });
  Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('login',    'Admin\LoginController@login');
});
//Admin ログイン後
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
  Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
  Route::get('home',      'Admin\HomeController@index')->name('admin.home');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function() {
//管理者
  Route::get('landlord', 'Admin\LandlordController@index');
//トップ
  Route::get('top/create', 'Admin\TopController@add');
  Route::post('top/create', 'Admin\TopController@create');
  Route::get('top/index', 'Admin\TopController@index');
  Route::get('top/edit', 'Admin\TopController@edit');
  Route::post('top/edit', 'Admin\TopController@update');
  Route::get('top/check', 'Admin\TopController@check');
//仕事依頼
  Route::get('job/create', 'Admin\JobController@add');
  Route::post('job/create', 'Admin\JobController@create');
  Route::get('job/index', 'Admin\JobController@index');
  Route::get('job/edit', 'Admin\JobController@edit');
  Route::post('job/edit', 'Admin\JobController@update');
  Route::get('job/check', 'Admin\JobController@check');
  
  
  //ブログ
    Route::get('blog/create', 'Admin\BlogController@add');
    Route::post('blog/create', 'Admin\BlogController@create');
    Route::get('blog/edit', 'Admin\BlogController@edit');
    Route::post('blog/edit', 'Admin\BlogController@update');
    Route::post('blog/delete', 'Admin\BlogController@delete');
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

  //ユーザー
    Route::get('news/create', 'Admin\UserController@add');
    Route::post('news/create', 'Admin\UserController@create');
    Route::post('news/edit', 'Admin\UserController@edit');
    Route::post('news/edit', 'Admin\UserController@update');
    Route::post('news/delete', 'Admin\UserController@delete');
});