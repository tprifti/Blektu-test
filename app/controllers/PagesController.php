<?php

class PagesController extends \BaseController {

public function showProfile ($id){
	//$user = User::where('id', $id)->first();
    //return View::make('profile')->with('user', $user);
    $user = User::find($id);
    return View::make('/dashboard/profili')->with('user', $user);
    
}

public function showAllUsers() {
  $users = User::all();
  return View::make('terri')->with('users', $users);;
}


}
?>