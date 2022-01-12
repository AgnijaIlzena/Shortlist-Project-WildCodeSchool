<?php

namespace App\Model;

class GetQuestionModel extends AbstractManager
{
    public const TABLE = 'question';

    public function getQuestionById(int $id): ?string
    {
        $statement = $this->pdo->prepare("SELECT content FROM " . self::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);

        $statement->execute();
        $result = $statement->fetch();
        if ($result) {
            $result = implode($result);
        }
        if ($result) {
            return $result;
        } else {
            return null;
        }
//        return $this->pdo->lastInsertId();

        /*
        $db = new Connection();
        $conn = $db->getPdoConnection();
        $query = 'SELECT * FROM question WHERE id=:id';
        $statement = $conn->query($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $question = $statement->fetch();
        return $question;
        */
    }

    /*    public function getAnswersById(int $id): array
        {
            $statement = $this->pdo->prepare("SELECT * FROM" . self::ANSWER . "WHERE id=:id");
            $statement->bindValue('id', $answer['id'], \PDO::PARAM_INT);
            $statement->execute();
            return (int)$this->pdo->lastInsertId();
    */
    /*
    $db = new Connection();
    $conn = $db->getPdoConnection();
    $query = 'SELECT * FROM answer WHERE id=:id';
    $statement = $conn->query($query);
    $statement->bindValue(':id', $id, \PDO::PARAM_INT);
    $answers = $statement->fetchAll();
    return $answers;
    */
}
//}
