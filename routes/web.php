<?php

Route::get('/', 'ThreadsController@home');
Route::get('/home', function () {});
Route::get('/threads', 'ThreadsController@index');
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');