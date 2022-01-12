<?php

namespace App\Controller;

use App\Model\LoginManager;

class LoginController extends AbstractController
{
    public function login(): string
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = array_map('trim', $_POST);
            $loginManager = new LoginManager();
            if (isset($_POST['submit'])) {
                if (!empty($user['email']) && !empty($user['passowrd'])) {
                    $email = $loginManager->checkemail($user['email']);
                    if ($email != null) {
                        $password = $user['passowrd'];
                        if (password_verify($password, $email['passowrd'])) {
                            $_SESSION['email'] = $email['email'];
                            $_SESSION['id'] = $email['id'];
                            header("Location: /home/index");
                            return '';
                        } else {
                            $error = "password is not correct";
                        }
                    } else {
                        $error = "email-id is not present";
                    }
                } else {
                    $error = "all fields are required";
                }
            }
        }

        return $this->twig->render('login/login.html.twig', ['error' => $error]);
    }

    public function logout()
    {
        session_destroy();
        header("Location: /home/index");
    }
}
