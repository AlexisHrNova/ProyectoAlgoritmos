<?php

return [

    'email' => [
        'is_unique' => 'El correo electrónico ya existe',
        'required' => 'El correo es obligatiorio',
        'valid_email' => 'Ingrese un correo válido'
    ],
    'password_confirmation' => [
        'required' => 'Por favor, repita la contraseña',
        'matches' => 'por favor, ingrese la contraseña nuevamente'
    ],
    'name' =>[
        'required' => 'El campo nombre es requerido'
    ],
    'password' =>[
        'required' => 'Se requiere una contraseña',
        'min_length' => 'La contraseña debe tener al menos 6 caracteres'
    ]


];