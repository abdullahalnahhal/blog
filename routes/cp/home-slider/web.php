<?php
Route::get('/','HomeSliderController@index')->name('index');
Route::get('/new','HomeSliderController@new')->name('new');
Route::post('/create','HomeSliderController@create')->name('create');
Route::get('{id}/edit','HomeSliderController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','HomeSliderController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','HomeSliderController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','HomeSliderController@view')->where(['id' => '[0-9]+'])->name('view');
?>
