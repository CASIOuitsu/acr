<?php

Route::get('/', 'PagesController@home'); // @home action
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/*
    # GETs: to show pages/views
    # POST, PATCH, DELETE: to make actions (usually to database, defined at controller/server_side)

    GET /projects (index)
    GET /projects/create (create)
    POST /projects (store)
    GET /projects/1 (show)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    #PUT /projects () # replacing a resource in it's entirety
    DELETE /projects/1 (destroy)
*/

Route::get('/projects/first', 'ProjectsController@first');
Route::get('/projects/last', 'ProjectsController@last');
Route::resource('projects', 'ProjectsController');

/* resource equivale a (uso de conventions/standards)
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::patch('/projects/{project}', 'ProjectsController@update');
Route::delete('/projects/{project}', 'ProjectsController@destroy');
 */

#Route::resource('posts', 'PostsController');

/* alternativa para simples: sem controller
Route::get('/about', function () {
  return view('about');
});

Route::get('/contact', function () {
  return view('contact');
});
*/

#Route::get('/user', 'UserController@index');
