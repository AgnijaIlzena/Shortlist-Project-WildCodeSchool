<?php

namespace App\Controller;

use App\Model\SignUpManager;

class SignUpController extends AbstractController
{

    public function index()
    {
        return $this->twig->render('SignUp/index.html.twig');
    }

}

