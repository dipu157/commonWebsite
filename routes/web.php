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

// Route::get('/', function () {
//     return view('Front.layout.home');
// });

Route::get('/', 'FrontController@index');

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

Route::get('/configuration/edit-configuration/{id}', 'BackControl\ConfigureController@editConfiguration')->name('edit-configuration');

Route::post('/configuration/update-configuration', 'BackControl\ConfigureController@updateConfiguration')->name('update-configuration');

Route::get('/configuration/delete-configuration/{id}', 'BackControl\ConfigureController@deleteConfiguration')->name('delete-configuration');


/*=========== Slider  ================*/ 

Route::get('/slider/slider-index', 'BackControl\SliderController@index')->name('slider-index');

Route::post('/slider/save-slider', 'BackControl\SliderController@saveSlider')->name('save-slider');

Route::get('/slider/unpublished-slider/{id}', 'BackControl\SliderController@unpublishedSlider')->name('unpublished-slider');

Route::get('/slider/published-slider/{id}', 'BackControl\SliderController@publishedSlider')->name('published-slider');

Route::get('/slider/edit-slider/{id}', 'BackControl\SliderController@editSlider')->name('edit-slider');

Route::post('/slider/update-slider', 'BackControl\SliderController@updateSlider')->name('update-slider');

Route::get('/slider/delete-slider/{id}', 'BackControl\SliderController@deleteSlider')->name('delete-slider');

/*=========== Page Body  ================*/ 

Route::get('/pagebody/pagebody-index', 'BackControl\PageBodyController@index')->name('pagebody-index');

Route::post('/pagebody/save-pagebody', 'BackControl\PageBodyController@savePageBody')->name('save-pagebody');

Route::get('/pagebody/unpublished-pagebody/{id}', 'BackControl\PageBodyController@unpublishedPageBody')->name('unpublished-pagebody');

Route::get('/pagebody/published-pagebody/{id}', 'BackControl\PageBodyController@publishedPageBody')->name('published-pagebody');

Route::get('/pagebody/edit-pagebody/{id}', 'BackControl\PageBodyController@editPageBody')->name('edit-pagebody');

Route::post('/pagebody/update-pagebody', 'BackControl\PageBodyController@updatePageBody')->name('update-pagebody');

Route::get('/pagebody/delete-pagebody/{id}', 'BackControl\PageBodyController@deletePageBody')->name('delete-pagebody');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('BackHome');
