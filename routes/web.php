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
Route::get('/cp/login', 'UsersController@login')->name('cp.login');
Route::post('/cp/login', 'UsersController@loginSubmit')->name('cp.login.submit');

Route::get('/', 'HomeController@guestIndex')->name('index');
Route::get('/about', 'AboutController@guestIndex')->name('about');
Route::get('/fields', 'FieldsController@guestIndex')->name('fields');
Route::get('/field/{id}', 'FieldsController@guestShow')->where(['id' => '[0-9]+'])->name('field');
Route::get('/gallery', 'GalleryController@guestIndex')->name('gallery');
Route::get('/videos', 'VideosController@guestIndex')->name('videos');
Route::get('/contacts', 'ContactsController@guestIndex')->name('contacts');
