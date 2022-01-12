<?php

return [
    '' => ['HomeController', 'index',],
    'user/films' => ['FilmController', 'index'],
    'user/films/delete' => ['FilmController', 'delete',],
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'Login/login' => ['LoginController', 'login',],
    'Signup/signup' => ['SignupController', 'signup',],
   ];
