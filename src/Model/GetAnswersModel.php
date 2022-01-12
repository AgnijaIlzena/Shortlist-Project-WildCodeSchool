<?php

namespace App\Model;

class getAnswersModel extends AbstractManager
{
    public const TABLE = 'answer';

    public function getAnswersById(int $id): ?array
    {
        $statement = $this->pdo->prepare("SELECT content FROM " . self::TABLE . " WHERE question_id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(\PDO::FETCH_COLUMN);

        if ($result) {
            return $result;
        } else {
            return null;
        }
    }
}
