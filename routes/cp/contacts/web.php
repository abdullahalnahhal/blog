<?php
Route::get('/','ContactsController@index')->name('index');
Route::get('/new','ContactsController@new')->name('new');
Route::post('/create','ContactsController@create')->name('create');
Route::get('{id}/edit','ContactsController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','ContactsController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','ContactsController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','ContactsController@view')->where(['id' => '[0-9]+'])->name('view');
?>
