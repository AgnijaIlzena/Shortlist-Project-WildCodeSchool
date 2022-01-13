<?php

namespace App\Controller;

use App\Model\SignUpManager;

class SignUpController extends AbstractController
{
    public function signUp()
    {
        return $this->twig->render('signUp/signUp.html.twig');
    }
    public function terms()
    {
        return $this->twig->render('signUp/terms.html.twig');
    }
    public function add(): string
    {
        $error = '';
        if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
            $user = array_map('trim', $_POST);
            $signUpManager = new SignUpManager();
            $result = $signUpManager->checkemail($_POST['email']);
            if ($result) {
                $signUpManager->insert($user);
                header('Location: /home/index');
                return '';
            } else {
                $error = "This email id is already present";
            }
        }
        return $this->twig->render('signUp/signUp.html.twig', ['error' => $error]);
    }
}
