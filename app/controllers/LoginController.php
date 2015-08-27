<?php

class LoginController extends \BaseController
{

    public function loginUser()
    {
        $rules = array('username' => 'required', 'password' => 'required');

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes()) {
            $credentials = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );
            if (Auth::user()->attempt($credentials, true)) {
                return Redirect::to("user/");
            } else {
                return Redirect::to('/login')->withErrors('Username or password invalid');
            }
        } else {
            return Redirect::to('/login')->withErrors($validator->messages());
        }
    }



    public function showEmail(){
        if (Auth::user()->check())
        {
        return View::make('successLogin', ['email' => Auth::user()->get()->email]);
        }
        return View::make('login');
    }


}
