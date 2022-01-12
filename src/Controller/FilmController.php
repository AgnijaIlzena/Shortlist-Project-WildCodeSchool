<?php

namespace App\Controller;

use App\Model\FilmManager;

class FilmController extends AbstractController
{
    public function index(): string
    {
        $filmManager = new FilmManager();
        $films = $filmManager->selectAll('title');
        return $this->twig->render('Film/film.html.twig', ['films' => $films]);
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id']);
            $filmManager = new FilmManager();
            $filmManager->delete((int)$id);
            header('Location: /user/films');
        }
    }
}
