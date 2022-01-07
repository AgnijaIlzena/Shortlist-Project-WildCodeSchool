<?php

namespace App\Controller;

use App\Model\SignUpManager;

class SignUpController extends AbstractController
{
    public function signUp()
    {
        $SignUpManager = new SignUpManager();
        $SignUp = $SignUpManager->selectAll('id');
        return $this->twig->render('SignUp/signUp.html.twig');
    }

}


