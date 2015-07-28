<?php
return array(

    'multi' => array(
        'account' => array(
            'driver' => 'eloquent',
            'model' => 'Account'
        ),
        'user' => array(
            'driver' => 'database',
            'table' => 'users',
						'model' => 'User'
        ),
				'admin' => array(
						'driver' => 'database',
						'table'  => 'admins',
						'model'  => 'Admin'
				)
    ),

    'reminder' => array(

        'email' => 'emails.auth.reminder',

        'table' => 'password_reminders',

        'expire' => 60,

    ),

);
