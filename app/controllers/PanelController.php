<?php

class PanelController extends \BaseController {


public function showProfile ($id){
	//$user = User::where('id', $id)->first();
    //return View::make('profile')->with('user', $user);
    $user = User::find($id);
    return View::make('dashboard.profili')->with('user', $user);

}

public function showAllUsers() {
  $users = User::all();
  return View::make('dashboard.allusers')->with('users', $users);;
}


/*
*
* Delete view page
*/
public function askForDelete($id){

    $user = User::find($id);
    return View::make('askForDelete')->with('user', $user);;
}


/*
*   Delete a user from database with items.
*
*
*/
public function deleteUser($id){


    $user = User::find($id);
    if (!is_null($user)) {
        $user->delete();
    }
     return View::make('dashboard.index');
}

}
