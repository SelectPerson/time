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
Route::get('/mark', 'HomeController@index')->name('mark');
Route::get('/planning', 'HomeController@index')->name('planning');
Route::get('/record', 'HomeController@index')->name('record');

//Route::get('/ajaxRequest', 'HomeController@ajaxRequest');
Route::post('/ajaxRequest', 'HomeController@ajaxRequestPost');
//

Route::post('/ajaxAddCategory', 'HomeController@ajaxAddCategory');
//
Route::post('/ajaxAddMarkBook', 'AjaxOperation@ajaxAddMarkBook');
//
Route::post('/ajaxSelectMarkBook','AjaxOperation@ajaxSelectMarkBook');


