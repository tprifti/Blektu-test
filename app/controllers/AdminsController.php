<?php

class AdminsController extends \BaseController {


  protected $admin;

  public function __construct(Admin $admin)
  {
      $this->admin = $admin;
  }


/**
 * Update user information
 *
 * @return Response
 */

public function update($id){
  $user = User::find($id);

  $user->fill(Input::All());
  $user->save();
  return View::make('dashboard.index');
}

/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */

public function show (){
  if (Auth::admin()->check()) {
        return View::make('successLogin', ['email' => Auth::admin()->get()->email]);
    }
    return View::make('admins');
}

public function create()
{
    return View::make('admins');
}


/**
 * Edit user information
 *
 * @return Response
 */

public function edit($id){

$user = User::Find($id);

;
return View::make('edituser')->with('user', $user);
}



/*
* Authenticate admin
*
*/

public function store()
{

    $rules = array('username' => 'required', 'password' => 'required');

    $validator = Validator::make(Input::all(), $rules);

    if($validator -> passes()){
        $credentials = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if(Auth::admin()->attempt($credentials,true)){
          return View::make('index');
            //$username = Input::get('username');
        } else {
            return Redirect::to('/admin')->withErrors('Username or password invalid');
        }
    } else  {
        return Redirect::to('/admin')->withErrors($validator->messages());

}
}


/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return Response
 */
public function index(){
    if (Auth::admin()->check()) {
      $users = User::all();
        return View::make('/dashboard/index')->with('users', $users);
    }
    return View::make('admins');
}

}
