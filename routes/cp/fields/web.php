<?php
Route::get('/','FieldsController@index')->name('index');
Route::get('/new','FieldsController@new')->name('new');
Route::post('/create','FieldsController@create')->name('create');
Route::get('{id}/edit','FieldsController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','FieldsController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','FieldsController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','FieldsController@view')->where(['id' => '[0-9]+'])->name('view');
?>
