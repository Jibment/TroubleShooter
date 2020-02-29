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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::match(['get', 'post'], '/thread', 'SaveController@store');
Route::match(['get', 'post'], '/data', 'PagesController@getData');
Route::get('/thread/{id}', function ($id) {    //記事へのURL idでデータを検索
    return view('content')->with('id', $id);
})->name('thread.show');
Route::post('/save', 'SaveController@store');

Route::get('/auth/twitter', 'Auth\SocialAuthController@redirectToProvider');
Route::get('/auth/twitter/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('/auth/twitter/logout', 'Auth\SocialAuthController@logout');
Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
