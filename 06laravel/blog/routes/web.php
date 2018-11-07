<?php

Route::get('/', 'PagesController@home'); // @home action
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');


/* alternativa simples: sem controller
Route::get('/about', function () {
  return view('about');
});

Route::get('/contact', function () {
  return view('contact');
});
*/

#Route::get('/user', 'UserController@index');
