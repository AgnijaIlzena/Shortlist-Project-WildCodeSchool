<?php

namespace App\Controller;

use App\Model\UserManager;

class UserController extends AbstractController
{
    public function selectMyUser(): ?string
    {
        $userManager = new UserManager();
        $user = $userManager->selectCheckedIn();
        return $this->twig->render('User/LogedInUser.html.twig', ['user' => $user]);
    }
}
