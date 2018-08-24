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
Route::get('/replace', 'idcardController@replace')->name('replace');
Route::get('/particulars', 'idcardController@particulars')->name('particulars');

Route::resource('applications', 'ApplicationsController');

// Route::get('create-chart/{type}','DashboardController@makeChart');

//dashboard routes
Route::prefix('dashboard')->group(function() {

    Route::get('/', 'DashboardController@dashboard')->name('dashboard');
    Route::get('applicants', 'DashboardController@applicants')->name('applicants');
    Route::get('new', 'DashboardController@new')->name('new');
    Route::get('update', 'DashboardController@update')->name('update');
    Route::get('replace', 'DashboardController@replace')->name('replace');
    Route::get('particulars', 'DashboardController@particulars')->name('particulars');
    Route::get('reports', 'DashboardController@chart');
    // Route::get('/downloadPDF/{id}', 'DashboardController@downloadPDF');
   	Route::resource('applicants', 'ApplicantsController');
    Route::get('confirm', 'DashboardController@confirm')->name('confirm');
   	Route::get('confirm1', 'DashboardController@confirm1')->name('confirm1');
    Route::get('payment', 'DashboardController@payment')->name('payment');
    Route::get('payment1', 'DashboardController@payment1')->name('payment1');
    Route::get('notification1', 'DashboardController@notification1')->name('notification1');
	Route::get('notification', 'DashboardController@notification')->name('notification');
});

Route::prefix('admin')->group(function() {

    Route::get('/', 'AdminController@index')->name('index');
    Route::get('reports', 'AdminController@chart');
    Route::get('applicants', 'AdminController@applicants')->name('applicants'); 
    Route::get('/downloadPDF/{id}', 'AdminController@downloadPDF');
});

