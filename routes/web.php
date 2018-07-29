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

Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('dashboard/applicants', 'DashboardController@applicants')->name('applicants');
Route::get('dashboard/new', 'DashboardController@new')->name('new');
Route::get('dashboard/replace', 'DashboardController@replace')->name('replace');
Route::get('dashboard/particulars', 'DashboardController@particulars')->name('particulars');

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
Route::resource('applicants', 'ApplicantsController');

Route::get('admin', 'AdminController@dashboard')->name('admin');
Route::get('admin/applicants', 'AdminController@applicants')->name('applicants');
Route::get('admin/reports', 'AdminController@reports')->name('reports');