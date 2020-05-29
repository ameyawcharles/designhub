<?php

// Public routes


// Route group for athenticated users only
Route::group(['middleware' => ['auth:api']], function(){

  //--  
});

// Route for guest only
Route::group(['middleware' => ['guest:api']], function(){
    Route::post('register', 'Auth\RegisterController@register');
});
