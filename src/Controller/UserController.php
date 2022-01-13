<?php

namespace App\Controller;

use App\Model\ItemManager;
use App\Model\UserManager;

class UserController extends AbstractController
{
    public function show(int $id): string
    //Select 1 user by ID
    {
        $userManager = new UserManager();
        $user = $userManager->selectOneById($id);

        return $this->twig->render('User/show.html.twig', ['user' => $user]);
    }


    public function index(): string
    {
        $userManager = new UserManager();
        $user = $userManager->selectAll('user_name');
        return $this->twig->render('User/user.html.twig', ['user' => $user]);
    }

    public function add(): string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // clean $_POST data
            $user = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, insert and redirection
            $userManager = new UserManager();
            $id = $userManager->insert($user);
            header('Location:/user/show?id=' . $id);
        }

        return $this->twig->render('User/add.html.twig');
    }



    public function edit(int $id): string
    {
        $userManager = new UserManager();
        $user = $userManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // clean $_POST data
            $user = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, update and redirection
            //  $itemManager->update($item);
            header('Location: /user/show?id=' . $id);
        }

        return $this->twig->render('User/edit.html.twig', [
            'user' => $user,
        ]);
    }



    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id']);
            $userManager = new UserManager();
            $userManager->delete((int)$id);
            header('Location: /user');
        }
    }

}
