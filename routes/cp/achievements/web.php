<?php
Route::get('/','AchievementsController@index')->name('index');
Route::get('/new','AchievementsController@new')->name('new');
Route::post('/create','AchievementsController@create')->name('create');
Route::get('{id}/edit','AchievementsController@edit')->where(['id' => '[0-9]+'])->name('edit');
Route::post('{id}/update','AchievementsController@update')->where(['id' => '[0-9]+'])->name('update');
Route::get('{id}/delete','AchievementsController@delete')->where(['id' => '[0-9]+'])->name('delete');
Route::get('{id}/view','AchievementsController@view')->where(['id' => '[0-9]+'])->name('view');
?>
