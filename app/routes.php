<?php

/**
 * RESTful Resources
 */
Route::group(['before' => 'auth.test'], function () {
    Route::resource('user', 'UserController');
    Route::resource('items', 'ItemsController');
});
Route::group(['before' => 'admin.auth'], function () {
   Route::get('/users/{id}/edit', 'AdminsController@edit')->before('admin.auth');
   Route::get('/admins/{id}/edit', 'AdminsController@edit')->before('admin.auth');
});

Route::group(['before' => 'auth.test'], function () {
    Route::get('/items/{id}', 'ItemsController@show');
    Route::get('/items/{id}/edit', 'ItemsController@edit');
    Route::get('/new/item', 'ItemsController@create');
	Route::post('/new/item', array('uses' => 'ItemsController@store', 'as' => 'new.item'));
	Route::get('/items/{id}/delete', array('uses'=> 'ItemsController@askForDelete', 'as' => 'ask.itemdelete'));
	Route::post('/items/{id}/delete', array('uses'=> 'ItemsController@destroy', 'as' => 'delete.item'));
});
//ADMIN PANEL ROUTES
Route::resource('admins', 'AdminsController');
Route::get('/admin', 'AdminsController@create');
Route::get('/dashboard', 'AdminsController@index');
Route::get('/admin', 'AdminsController@show');
Route::any('admin/logout', 'AdminsController@destroy');
//Users function from admin panel
Route::get('/users/{id}', 'PanelController@showProfile')->before('admin.auth');
Route::get('/users', array('uses' => 'PanelController@showAllUsers', 'as' => 'all.users'))->before('admin.auth');
Route::get('/users/{id}/delete',array('uses'=> 'PanelController@askForDelete', 'as' => 'ask.user'))->before('admin.auth');
Route::post('/users/{id}/delete',array('uses'=> 'PanelController@deleteUser', 'as' => 'delete.user'))->before('admin.auth');
Route::get('/user/create', 'UserController@create')->after('auth.test');
Route::post('/user/create', 'UserController@store');
Route::get('/allitems/{id}', array('uses' =>'UserController@getAllItems', 'as' => 'show.items' ));

//LOGIN ROUTE FOR USER
Route::get('/login', 'LoginController@showEmail');
Route::post('/login', 'LoginController@loginUser');
Route::any('/logout', 'UserController@destroy');
// Laravel HomePage
Route::get('/', function(){
    return View::make('hello');
});
 
 // App special behavior
App::missing(function ($ex) {
    return View::make('404', ['message' => $ex->getMessage()]);
});

/*
 * TODO: Add User Profile Image
 *
 */

