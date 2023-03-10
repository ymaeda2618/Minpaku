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

Auth::routes();

// ----------------
// ホーム画面
// ----------------
Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/about', 'PagesController@getAbout');

// ----------------
// カレンダ関連
// ----------------
Route::get('/calendar', 'CalendarController@index')->name('calendar.index')->middleware('web');
Route::get('getReserveSlots', 'CalendarController@getReserveSlots');

// ----------------
// 予約関連
// ----------------
Route::get('/reserve/{reserve_slot_id}', 'ReserveController@index')->name('reserve.index');
Route::post('/reserve/confirm', 'ReserveController@confirm')->name('reserve.confirm');
Route::post('/reserve/complete', 'ReserveController@complete')->name('reserve.complete');

// ----------------
// マイページ関連
// ----------------
Route::get('/mypage', 'MypageController@index')->name('mypage.index');

// ----------------
// お問い合わせ関連
// ----------------
//入力フォームページ
Route::get('/contact', 'ContactsController@index')->name('contact.index');
//確認フォームページ
Route::post('/contact/confirm', 'ContactsController@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', 'ContactsController@send')->name('contact.send');
