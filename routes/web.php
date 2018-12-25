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
#Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dataset', 'DatasetController@index')->name('dataset.index');
    Route::get('/datatesting', 'DatatestController@index')->name('datatesting.index');
    Route::get('/datatraining', 'DatatrainingController@index')->name('datatraining.index');
    Route::get('/result', 'DatatestController@hitung');

    //Route::post('/datatest/create', 'DatatestController@store')->name('datatest.store');
    Route::get('/seleksi', 'SeleksiController@index')->name('seleksi.index');
    Route::post('/result', 'SeleksiController@run')->name('result');
});
