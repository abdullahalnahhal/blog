<?php
Route::get('/','GalleryController@index')->name('index');
Route::get('/new','GalleryController@new')->name('new');
Route::post('/create','GalleryController@create')->name('create');
Route::get('{id}/edit','GalleryController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','GalleryController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','GalleryController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','GalleryController@view')->where(['id' => '[0-9]+'])->name('view');
?>
