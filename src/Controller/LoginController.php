<?php

namespace App\Controller;

use App\Model\LoginManager;

class LoginController extends AbstractController
{
    public function login()
    {
        return $this->twig->render('Login/login.html.twig');
    }
}
