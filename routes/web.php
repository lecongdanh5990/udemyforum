<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('{provider}/auth',[
    'uses'=>'SocialController@auth',
    'as'=>'social.auth'
]);
Route::get('{provider}/redirect',[ 
    'uses'=>'SocialController@authCallback',
    'as'=>' social.callback'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
