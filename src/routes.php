<?php

return [
    '' => ['HomeController', 'index',],
    'game' => ['QuizController', 'quizDisplay',],
    'user' => ['UserController', 'index',],
    'user/films' => ['FilmController', 'index'],
    'user/films/delete' => ['FilmController', 'delete',],
    'user/profile' => ['UserController', 'selectMyUser'],
    'contact' => ['ContactController', 'index',],
    'login' => ['LoginController', 'login',],
    'signUp' => ['SignUpController', 'signUp',],
    'signUp/add' => ['SignUpController', 'add',],
    'terms' => ['SignUpController', 'terms',],
    'signout' => ['LoginController', 'logout',],
   ];
