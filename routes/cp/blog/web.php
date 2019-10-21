<?php
Route::get('/','BlogController@index')->name('index');
Route::get('/new','BlogController@new')->name('new');
Route::post('/create','BlogController@create')->name('create');
Route::get('{id}/edit','BlogController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','BlogController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','BlogController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','BlogController@view')->where(['id' => '[0-9]+'])->name('view');
?>
