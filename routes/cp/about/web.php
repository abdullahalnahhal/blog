<?php
Route::get('/','AboutController@index')->name('index');
Route::get('/new','AboutController@new')->name('new');
Route::post('/create','AboutController@create')->name('create');
Route::get('{id}/edit','AboutController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','AboutController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','AboutController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','AboutController@view')->where(['id' => '[0-9]+'])->name('view');
?>
