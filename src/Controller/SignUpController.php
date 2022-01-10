<?php

namespace App\Controller;

class SignUpController extends AbstractController
{
    public function signUp()
    {
        return $this->twig->render('SignUp/signUp.html.twig');
    }
}
