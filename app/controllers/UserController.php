<?php


class UserController extends BaseController
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return View::make('profile', ['user' => Auth::user()]);
    }

    public function create()
    {
        return View::make('register');
    }

    public function store()
    {

        if ($this->user->isValid(Input::all())) {
            $user = new User;
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            $user->password = Hash::make(Input::get('password'));
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');

            $user->save();

            return Redirect::to('/user');
        } else {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
    }

    public function show($username)
    {
       $user = $this->user->whereUsername($username)->first();

        /*if (!$user) {
            App::abort(404, 'User not found');n/
        }*/

        return View::make('profile', ['user' => $user]);
    }

    public function destroy(){
        Auth::user()->logout();
        return Redirect::to('/');
    }

    public function getAllItems($id){
        $user = User::where('id', $id)->first();
        $uid = User::find($id);
        $authuser = Auth::user()->get()->id;

        if(intval($authuser)== $uid['id'])
        {
            return View::make('test')->with('user', $user);

        } else
        {
            return "null";
        }

    }

}