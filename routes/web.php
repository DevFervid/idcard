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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'idcardController@index')->name('index');
Route::get('/services', 'idcardController@services')->name('services');
Route::get('/contact', 'idcardController@contact')->name('contact');
Route::get('/changepartireq', 'idcardController@changepartireq')->name('changepartireq');
Route::get('/newidreq', 'idcardController@newidreq')->name('newidreq');
Route::get('/replaceidreq', 'idcardController@replaceidreq')->name('replaceidreq');
Route::get('/services', 'idcardController@services')->name('services');

Route::resource('applications', 'ApplicationsController');

