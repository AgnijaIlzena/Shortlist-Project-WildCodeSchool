<?php

namespace App\Controller;

use App\Model\LoginManager;

class LoginController extends AbstractController
{
    /**
     * List items
     */
    public function index()
    {
        return $this->twig->render('Login/index.html.twig');
    }

}

