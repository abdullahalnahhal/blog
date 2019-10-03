<?php
    Route::resource('', 'UsersController');
    // ->except(['login', 'loginSubmit', 'show']);
    Route::get('logout', 'UsersController@logout')->name('logout');
?>
