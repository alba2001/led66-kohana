<?php defined('SYSPATH') or die('No direct script access.');
return array(
    'username' => array(
        'not_empty' => 'Вы не ввели имя пользователя',
        'unique' => 'Введенное имя уже используется другим пользователем',
        'regex' => 'В имени пользователя есть недопустимые символы',
        'max_length' => 'Имя пользователя первышает допустимое количество символов (32)',
	),
    'email' => array(
        'not_empty' => 'Вы не ввели адрес эл. почты',
        'email' => 'Вы допустили ошибку при вводе адреса эл. почты',
        'unique' => 'Введенный адрес эл. почты используется другим пользователем',
	),
    'password' => array(
        'not_empty' => 'Вы не ввели пароль',
        'min_length' => 'Длинна пароля не должна быть меньше 6-и символов',
        'confirm' => 'Введенные пароли не совпадают',
	),
);