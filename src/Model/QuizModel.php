<?php

namespace App\Model;

class QuizModel
{
    public function getQuestionById(int $id): string
    {
        $db = new Connection();
        $conn = $db->getPdoConnection();
        $query = 'SELECT * FROM question WHERE id=:id';
        $statement = $conn->query($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $question = $statement->fetch();
        return $question;
    }

    public function getAnswersById(int $id): array
    {
        $db = new Connection();
        $conn = $db->getPdoConnection();
        $query = 'SELECT * FROM answer WHERE id=:id';
        $statement = $conn->query($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $answers = $statement->fetchAll();
        return $answers;
    }
}
