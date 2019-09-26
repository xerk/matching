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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/users/{id}/approve', 'ApproveController@approve')->name('approve.user')->middleware('admin.user');
    Route::get('/users/{id}/refuse', 'ApproveController@refuse')->name('refuse.user')->middleware('admin.user');
});