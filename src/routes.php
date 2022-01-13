<?php

return [
    '' => ['HomeController', 'index',],
    'game' => ['QuizController', 'quizDisplay',],
    'user' => ['UserController', 'index',],
    'user/films' => ['FilmController', 'index'],
    'user/films/delete' => ['FilmController', 'delete',],
    'user' => ['UserController', 'index'],
    'user/show' => ['UserController', 'show', ['id']],

    'user/edit' => ['UserController', 'edit', ['id']],

    'user/add' => ['UserController', 'add',],
    //'items' => ['ItemController', 'index',],
   // 'home/index' => ['HomeController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'contact' => ['ContactController', 'index',],
    'login' => ['LoginController', 'login',],
    'signUp' => ['SignUpController', 'signUp',],
    'signUp/add' => ['SignUpController', 'add',],
    'terms' => ['SignUpController', 'terms',],
    'signout' => ['LoginController', 'logout',],
   ];
