<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::get('contact',function (){
//   return "test";
//});

Route::group(['namespace'=>'Rumman\Contact\Http\Controllers'],function (){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');
});

