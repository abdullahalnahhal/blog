<?php
Route::get('/','ClientsController@index')->name('index');
Route::get('/new','ClientsController@new')->name('new');
Route::post('/create','ClientsController@create')->name('create');
Route::get('{id}/edit','ClientsController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','ClientsController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','ClientsController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','ClientsController@view')->where(['id' => '[0-9]+'])->name('view');
?>
