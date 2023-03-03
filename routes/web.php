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

// 必要ないのでコメントアウト
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');

//入力フォームページ
Route::get('/contact', 'ContactsController@index')->name('contact.index');
//確認フォームページ
Route::post('/contact/confirm', 'ContactsController@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', 'ContactsController@send')->name('contact.send');
