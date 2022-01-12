<?php

namespace App\Controller;

use App\Model\getQuestionModel;
use App\Model\getAnswersModel;

class QuizController extends AbstractController
{
//    private getQuestionModel $getQuestionModel;
//    private getAnswersModel $getAnswersModel;

    /*
    public function __construct()
    {
        $this->getQuestionModel = new getQuestionModel();
        $this->getAnswersModel = new getAnswersModel();
    }
    */

    public function quizDisplay()
    {
        if (!isset($_SESSION['i'])) {
            $_SESSION['i'] = 1; // Variable showing which question it is that is displayed
            $_SESSION['a'] = 0; // Amount of A answers
            $_SESSION['b'] = 0; // Amount of B answers
            $_SESSION['c'] = 0; // Amount of C answers
            $_SESSION['d'] = 0; // Amount of D answers
        }

        if ($_GET['answer'] !== 'start') {
            switch ($_GET['answer']) {
                case 'a':
                    $_SESSION['a']++;
                    $_SESSION['i']++;
                    break;
                case 'b':
                    $_SESSION['b']++;
                    $_SESSION['i']++;
                    break;
                case 'c':
                    $_SESSION['c']++;
                    $_SESSION['i']++;
                    break;
                case 'd':
                    $_SESSION['d']++;
                    $_SESSION['i']++;
                    break;
                default:
                    echo 'Not a valid answer';
                    break;
            }
        }

        if ($_SESSION['i'] === 9) {
            unset($_SESSION['i']);
            if (
                $_SESSION['d'] >= $_SESSION['c']
                && $_SESSION['d'] >= $_SESSION['b']
                && $_SESSION['d'] >= $_SESSION['a']
            ) {
                $trailer = 'd';
            }
            header('Location: game/result', ['trailer' => $trailer]);
            return;
        }

        $getQuestionModel = new getQuestionModel();
        $getAnswersModel = new getAnswersModel();

        $question = $getQuestionModel->getQuestionById($_SESSION['i']);

        $answerArray = $getAnswersModel->getAnswersById($_SESSION['i']);

        return $this->twig->render('Game/quiz.html.twig', ['question' => $question , 'answers' => $answerArray]);
    }
}
