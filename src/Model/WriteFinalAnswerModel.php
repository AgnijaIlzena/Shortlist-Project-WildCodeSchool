<?php

namespace App\Model;

class WriteFinalAnswerModel extends AbstractManager
{
    public const TABLE = 'user';

    public function writeResultInProfile(int $id, string $letter): void
    {
        $statement = $this->pdo->prepare("SELECT final_result FROM " . self::TABLE . " WHERE user_id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);

        $statement->execute();

        $finalResult = $statement->fetch(\PDO::FETCH_COLUMN);
        $finalResult = $finalResult . $letter;

        $statement = $this->pdo->prepare(
            "UPDATE " . self::TABLE . " SET final_answer '" . $finalResult . "' WHERE user_id:id"
        );
        $statement->bindValue('id', $id, \PDO::PARAM_INT);

        $statement->execute();
    }
}
