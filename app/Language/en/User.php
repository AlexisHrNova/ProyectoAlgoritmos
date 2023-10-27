<?php

return [

    'email' => [
        'is_unique' => 'That email address is taken',
        'valid_email' => 'Enter a valid email',
        'required' => 'The email is required',
    ],
    'password_confirmation' => [
        'required' => 'Please confirm the password',
        'matches' => 'Please enter the same password again'
    ],
    'name' =>[
        'required' => 'The name field is required'
    ],
    'password' =>[
        'required' => 'Password is required',
        'min_length' => 'Password must be at least 6 characters'
    ]

];