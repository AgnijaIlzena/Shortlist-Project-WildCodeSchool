<?php

namespace App\Controller;

use App\Model\ItemManager;

class UserController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('User/userWatchlist.html.twig');
    }
}
