<?php

namespace App\Controller;

class ContactController extends AbstractController
{
    //validation should be created
    public function index()
    {
        return $this->twig->render('Contact/contact.html.twig');
    }
}
