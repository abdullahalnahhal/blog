<?php
Route::get('/','UsersRolesController@index')->name('index');
Route::get('/new','UsersRolesController@new')->name('new');
Route::post('/create','UsersRolesController@create')->name('create');
Route::get('{id}/edit','UsersRolesController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','UsersRolesController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','UsersRolesController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','UsersRolesController@view')->where(['id' => '[0-9]+'])->name('view');
?>
