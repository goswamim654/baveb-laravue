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

Route::get('/common/basicSettings/units', 'Common\BasicSettings\UnitsController@index')->name('units');
Route::get('/common/basicSettings/units/all', 'Common\BasicSettings\UnitsController@viewall')->name('units');
Route::get('/common/basicSettings/units/view/{id}', 'Common\BasicSettings\UnitsController@show')->name('unitShow');
Route::get('/common/basicSettings/units/basicUnity/{id}', 'Common\BasicSettings\UnitsController@basicUnity')->name('basicUnity');
