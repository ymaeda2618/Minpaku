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

Route::get('/', 'PagesController@getHome')->name('home');;
Route::get('/about', 'PagesController@getAbout');

//予約ページ
Route::get('/calendar', 'ReserveController@index')->name('calendar.index')->middleware('web');
Route::get('/reserve/{reserve_slot_id}', 'ReserveController@reserve')->name('calendar.reserve')->middleware('web');
Route::post('/reserve/confirm', 'ReserveController@confirm')->name('calendar.confirm')->middleware('web');
Route::get('getReserveSlots', 'ReserveController@getReserveSlots');


// ----------------
// お問い合わせ関連
// ----------------
//入力フォームページ
Route::get('/contact', 'ContactsController@index')->name('contact.index');
//確認フォームページ
Route::post('/contact/confirm', 'ContactsController@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', 'ContactsController@send')->name('contact.send');
