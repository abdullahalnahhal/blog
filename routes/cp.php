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
    return view('admin.index');
})->name('index');
Route::resource('about', 'AboutController');
Route::resource('achievements', 'AchievementsController');
Route::resource('admins', 'UsersController')
->except(['login', 'loginSubmit']);
Route::resource('permissions', 'UsersPermissionsController');
Route::resource('clients', 'ClientsController');
Route::resource('contacts', 'ContactsController');
Route::resource('fields', 'FieldsController');
Route::resource('gallery', 'GalleryController');
Route::resource('slider', 'HomeSliderController');
Route::resource('videos', 'VideosController');
Route::resource('blog', 'BlogController');
// Route::get('/cp/login', 'UsersController@login')->name('login');
// Route::post('/cp/login', 'UsersController@loginSubmit')->name('login.submit');
// Route::get('/cp/logout', 'UsersController@logout')->name('logout');
