<?php
Route::get('/','VideosController@index')->name('index');
Route::get('/new','VideosController@new')->name('new');
Route::post('/create','VideosController@create')->name('create');
Route::get('{id}/edit','VideosController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','VideosController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','VideosController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','VideosController@view')->where(['id' => '[0-9]+'])->name('view');
?>
