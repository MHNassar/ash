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

//Route::get('/', function () {
//    return view('site.index');
//});

Route::get('/', 'SiteController@getHome');
Route::get('/about', 'SiteController@getAbout');
Route::get('/services', 'SiteController@getServices');
Route::get('/work', 'SiteController@getWorks');
Route::get('/contact', 'SiteController@getContact');
