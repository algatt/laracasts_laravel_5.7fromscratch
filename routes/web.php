<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

/* Convention

GET /projects (index) -- returns all projects
GET /projects/create (create) -- to create a project
GET /projects/1 (show) -- show a project
POST /projects (store) -- save a project
GET /projects/1/edit (edit) -- edit a project
PATCH /projects/1 (update) -- update a project with given id
DELETE /projects/1 (destroy) -- delete a project with given id

Route::get('/projects','ProjectController@index');
Route::get('/projects/create','ProjectController@create');
Route::get('/projects/{project}','ProjectController@show');
Route::post('/projects','ProjectController@store');
Route::get('/projects/{project}/edit','ProjectController@edit');
Route::patch('/projects/{project}','ProjectController@update');
Route::delete('/projects/{project}','ProjectController@destroy');
*/

//can be replaced by
Route::resource('projects','ProjectController');
/* then 
    php artisan make:controller NameController -r 
    or php artisan make:controller NameController -r -m ModelName (to include model)
   this will create boilerplate
*/

Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::patch('/tasks/{task}','ProjectTasksController@update');