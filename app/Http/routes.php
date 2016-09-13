<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::model('notes', 'App\Note');
Route::model('d_checks', 'App\d_check');
Route::model('q_checks', 'App\q_check');
Route::model('we_checks', 'App\we_check');
Route::model('problems', 'App\problem');
Route::model('complains', 'App\complain');
Route::model('todos', 'App\ToDo');
Route::model('freezers', 'App\freezer');
Route::model('rentals', 'App\rental');
Route::model('vendors', 'App\vendor');
Route::get('/', 'PagesController@index');
Route::get('dashboard', 'PagesController@index');
Route::get('hotel_rooms', 'PagesController@hotel_rooms');
Route::get('room_reports/{room_no}', 'PagesController@room_reports');
Route::get('work_logs', 'PagesController@work_logs');
//Route::get('room_notes', 'NotesController@index');
//Route::get('room_notes/{id}/create', 'NotesController@create');
//Route::get('room_notes/{id}', 'NotesController@show');
//Route::get('room_notes/{id}/edit', 'NotesController@edit');
//Route::patch('room_notes/{id}', 'NotesController@update');
//Route::get('notes/{notes}/edit', 'NotesController@edit');
//Route::resource('notes', 'NotesController', [
// 'except' => ['index', 'create', 'show' ]
// ]);
//Route::resource('hotel_rooms', 'RoomsController', ['only' => ['create']]);
Route::GET('notes/{notes}/edit', ['as' => 'notes.edit', 'uses' => 'NotesController@edit']);
Route::GET('notes/{rooms}/create', 'NotesController@create');
Route::POST('notes', ['as' => 'notes.store', 'uses' => 'NotesController@store']);
Route::PATCH('notes/{notes}', 'NotesController@update');
Route::DELETE('notes/{notes}', ['as' => 'notes.destroy', 'uses' => 'NotesController@destroy']);
//$router->patch('notes/{notes}', ['as' => 'notes.update', 'uses' => 'NotesController@update']);
//Route::get('inspections/{case_no}', 'InspectionsController@index');
//Route::get('room_check_d/{room_no}', 'Room_Check_D_Controller@show');
//Route::get('room_check_d/{room_no}/create', 'Room_Check_D_Controller@create');
//Route::resource('room_check_d', 'Room_Check_D_Controller');
//Route::resource('d_checks', 'D_Checks_Controller');
Route::GET('d_checks/{d_checks}/edit', ['as' => 'd_checks.edit', 'uses' => 'D_Checks_Controller@edit']);
Route::GET('d_checks/{rooms}/create', 'D_Checks_Controller@create');
Route::POST('d_checks', ['as' => 'd_checks.store', 'uses' => 'D_Checks_Controller@store']);
Route::PATCH('d_checks/{d_checks}', 'D_Checks_Controller@update');
Route::DELETE('d_checks/{d_checks}', ['as' => 'd_checks.destroy', 'uses' => 'D_Checks_Controller@destroy']);
Route::GET('q_checks/{q_checks}/edit', ['as' => 'q_checks.edit', 'uses' => 'Q_Checks_Controller@edit']);
Route::GET('q_checks/{rooms}/create', 'Q_Checks_Controller@create');
Route::POST('q_checks', ['as' => 'q_checks.store', 'uses' => 'Q_Checks_Controller@store']);
Route::PATCH('q_checks/{q_checks}', 'Q_Checks_Controller@update');
Route::DELETE('q_checks/{q_checks}', ['as' => 'q_checks.destroy', 'uses' => 'Q_Checks_Controller@destroy']);
Route::GET('we_checks/{we_checks}/edit', ['as' => 'we_checks.edit', 'uses' => 'WE_Checks_Controller@edit']);
Route::GET('we_checks/{rooms}/create', 'WE_Checks_Controller@create');
Route::POST('we_checks', ['as' => 'we_checks.store', 'uses' => 'WE_Checks_Controller@store']);
Route::PATCH('we_checks/{we_checks}', 'we_Checks_Controller@update');
Route::DELETE('we_checks/{we_checks}', ['as' => 'we_checks.destroy', 'uses' => 'WE_Checks_Controller@destroy']);
Route::resource('problems', 'ProblemsController', ['except' => 'show']);
Route::resource('complains', 'ComplainsController', ['except' => 'show']);
Route::resource('todos', 'ToDosController', ['except' => 'show']);
Route::resource('freezers', 'FreezersController', ['except' => 'show']);
Route::resource('rentals', 'RentalsController', ['except' => 'show']);
Route::resource('vendors', 'VendorsController', ['except' => 'show']);