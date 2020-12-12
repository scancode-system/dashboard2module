<?php

Route::middleware('auth')->group(function() {
    
    Route::get('/home', 'HomeController')->name('dashboard');

});
