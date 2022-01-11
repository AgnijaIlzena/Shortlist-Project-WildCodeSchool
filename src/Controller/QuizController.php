<?php

namespace App\Controller;

use App\Model\QuizModel;

include __DIR__ . '/../Model/QuizModel.php';

class QuizController
{
    private QuizModel $model;

    public function __construct()
    {
        $this->model = new QuizModel();
    }

    public function quizDisplay(): void
    {
        if (!isset($_SESSION['i'])) {
            $_SESSION['i'] = 1; // Variable showing which question it is that is displayed
            $_SESSION['a'] = 0; // Amount of A answers
            $_SESSION['b'] = 0; // Amount of B answers
            $_SESSION['c'] = 0; // Amount of C answers
            $_SESSION['d'] = 0; // Amount of D answers
        }

        if ($_SESSION['i'] === 9) {
            unset($_SESSION['i']);
            header('Location:'); // Need to put in the redirection to the result screen
            return;
        }

        $question = $this->model->getQuestionById($_SESSION['i']);

        $answerArray = $this->model->getAnswersById($_SESSION['i']);

        require __DIR__ . '/../View/Game/quiz.html.twig';
    }
}
