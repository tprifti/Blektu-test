<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    public function items()
    {
        return $this->hasMany('Items', 'user_ID', 'id');
    }

    protected $guarded = array('username', 'password');


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
    protected $table = 'admins';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    public function isValid($data)
    {
        $validator = Validator::make($data, static::$rules, $this->messages);
        if ($validator->passes()) return true;

        $this->errors = $validator->messages();
        return false;

    }
}
