<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    public function items()
    {
        return $this->hasMany('Items', 'user_ID', 'id');
    }


    protected $guarded = array('id', 'phone');

    protected $fillable = [
        'username',
        'email',
        'firstname',
        'lastname',
        'password',
        'password_repeat',
         'address1',
         'address2',

    ];

    public static $rules = [
        'username' => 'required|unique:users|alpha_dash|min:6',
        'email' => 'required|email|unique:users',
        'firstname' => 'required',
        'lastname' => 'required',
        'password' => 'required|alpha_num|min:6|',
        'password_repeat' => 'required|same:password'
    ];
    public $errors;
    private $messages = array(
        'required' => 'Fusha :attribute duhet te plotesohet!',
        'unique' => 'Ky :attribute eshte i zene!',
        'alpha_dash' => 'Fusha :attribute mund te permbaje karaktere (abc...), numra(0-9), dhe \'-\' ose \'_\'',
        'alpha_num' => 'Fusha:attribute mund te permbaje karaktere dhe te pakten nje shifer numerike (0-9)',
        'min:6' => 'Fusha :attribute duhet te kete te pakten :value karaktere',
        'email' => 'Email jo i sakte, shembull (example@example.com)',
        'same' => 'Fusha :other duhet te perputhet me fushen :attribute',
        'numeric' => 'Fusha :attribute mund te permbaje karaktere dhe te pakten nje shifer numerike (0-9)',
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public function isValid($data)
    {
        $validator = Validator::make($data, static::$rules, $this->messages);
        if ($validator->passes()) return true;

        $this->errors = $validator->messages();
        return false;

    }
}
