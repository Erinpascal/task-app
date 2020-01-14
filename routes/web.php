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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('task', 'TasksController');


Route::get('/delete/{task_id}','TasksController@getDeleteTask')->name('task.delete');

Route::post('/task/{id}', 'TasksController@edittask');
Route::patch('/status/{id}', 'TasksController@toggleTask');



Route::group(['prefix'=>'admin','middleware'=> 'auth'], function () {
	Route::get('/', function () {
		return view('admin.index');
	})->name('admin.index');
	 
	

});


Route::resource('organisation', 'OrganisationController');
Route::get('/delete/{organisation_id}','OrganisationController@getDeleteOrganisation')->name('organisation.delete');

Route::post('/organisation/{id}', 'OrganisationController@editorganisation');

Route::post('/members/{id}', 'OrganisationController@organisationmembers');
Route::post('/home/{id}', 'OrganisationController@toggleUser');

// Route::patch('/status/{id}', 'OrganisationController@toggleOrganisation');


