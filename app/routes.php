<?php

/**
 * RESTful Resources
 */
Route::group(['before' => 'auth'], function () {

    Route::resource('user', 'UserController');
    Route::resource('items', 'ItemsController');

});


/**
 * Inline URLs
 */
Route::get('/', function () {

   return View::make('hello');

});

Route::get('/login', function () {

    if (Auth::user()->check()) {
        return View::make('successLogin', ['email' => Auth::user()->get()->email]);
    }
    return View::make('login');

});

Route::group(['before' => 'admin.auth'], function () {

   Route::get('/users/{id}/edit', 'AdminsController@edit')->before('admin.auth');
   Route::get('/admins/{id}/edit', 'AdminsController@edit')->before('admin.auth');
    

});



Route::post('/login', 'LoginController@login');

Route::any('/logout', function () {

    Auth::user()->logout();
    return Redirect::to('/');

});

//Route::get('/dashboard/{username}', array('as' => 'Pages', 'before' => 'admauth', 'uses' => 'PagesController@showUsername'));
Route::get('/users/{id}', 'PagesController@showProfile')->before('admin.auth');
Route::get('/users', array('uses' => 'PagesController@showAllUsers', 'as' => 'all.users'))->before('admin.auth'); 
    //dd($user);


//ADMIN Routes
Route::get('/admin', 'AdminsController@create');
Route::get('/dashboard', 'AdminsController@index');
Route::resource('admins', 'AdminsController');
Route::get('/admin', 'AdminsController@show');

    
Route::any('admin/logout', function () {

    Auth::admin()->logout();
    return Redirect::to('/admin');

});





/**
 * App special behavior
 */
/*App::missing(function ($ex) {

    return View::make('404', ['message' => $ex->getMessage()]);

});*/
