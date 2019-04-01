<?php

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'admin'],function()
{
    Route::get('public/login','Admin\PublicController@login')->name('login');
    Route::get('public/logout','Admin\PublicController@logout')->name('logout');
    Route::post('public/check','Admin\PublicController@check');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{
    Route::get('admin/index','Admin\IndexController@index')->name('adminIndex');
    Route::get('admin/welcome','Admin\IndexController@welcome');

    Route::get('manager/index','Admin\ManagerController@index')->name('managerIndex');
});
