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

/*=========== Menu ================*/ 

Route::get('/menu/add-menu-index', 'BackControl\MenuController@index')->name('add-menu-index');
Route::post('/menu/add-menu', 'BackControl\MenuController@addMenu')->name('add-menu');
Route::get('/menu/manage-menu', 'BackControl\MenuController@manageMenu')->name('manage-menu-index');
Route::get('/menu/unpublished-menu/{id}', 'BackControl\MenuController@unpublishedMenu')->name('unpublished-menu');
Route::get('/menu/published-menu/{id}', 'BackControl\MenuController@publishedMenu')->name('published-menu');
Route::get('/menu/edit-menu-index/{id}', 'BackControl\MenuController@editMenuIndex')->name('edit-menu-index');
Route::post('/menu/update-menu', 'BackControl\MenuController@updateMenu')->name('update-menu');
Route::get('/menu/delete-menu/{id}', 'BackControl\MenuController@deleteMenu')->name('delete-menu');

/*=========== Configuration  ================*/ 

Route::get('/configuration/configuration-index', 'BackControl\ConfigureController@index')->name('configure-index');
Route::post('/configuration/save-configuration', 'BackControl\ConfigureController@saveConfiguration')->name('save-configure');

/*=========== Slider  ================*/ 

Route::get('/slider/slider-index', 'BackControl\SliderController@index')->name('slider-index');

/*=========== Page Body  ================*/ 

Route::get('/pagebody/pagebody-index', 'BackControl\PageBodyController@index')->name('pagebody-index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('BackHome');
