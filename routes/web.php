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
    return view('Front.layout.home');
});

/*============Admin Part =================*/

Route::get('/cwadmin', function () {
    return view('Back.login');
});

Route::get('/menu/add-menu-index', 'MenuController@index')->name('add-menu-index');
Route::post('/menu/add-menu', 'MenuController@addMenu')->name('add-menu');
Route::get('/menu/manage-menu', 'MenuController@manageMenu')->name('manage-menu-index');











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
