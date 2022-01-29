<?php

return [
    '' => ['HomeController', 'index',],
    'game' => ['QuizController', 'quizDisplay',],
    'user' => ['UserController', 'index',],
    'user/films' => ['FilmController', 'index'],
    'user/films/delete' => ['FilmController', 'delete',],
    'items' => ['ItemController', 'index',],
   // 'home/index' => ['HomeController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'user/profile' => ['UserController', 'selectMyUser'],
    'contact' => ['ContactController', 'index',],
    'login' => ['LoginController', 'login',],
    'signUp' => ['SignUpController', 'signUp',],
    'signUp/add' => ['SignUpController', 'add',],
    'terms' => ['SignUpController', 'terms',],
    'signout' => ['LoginController', 'logout',],
   ];
