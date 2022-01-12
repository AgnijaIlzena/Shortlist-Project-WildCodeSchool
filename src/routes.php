<?php

return [
    '' => ['HomeController', 'index',],
    'user/films' => ['FilmController', 'index'],
    'user/films/delete' => ['FilmController', 'delete',],
    'items' => ['ItemController', 'index',],
    'home/index' => ['HomeController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'contactUs/index' => ['ContactController', 'index',],
    'login' => ['LoginController', 'login',],
    'signUp' => ['SignUpController', 'signUp',],
    'signUp/add' => ['SignUpController', 'add',],
    'signout' => ['LoginController', 'logout',],
   ];
