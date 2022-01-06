<?php

namespace App\Model;

class SignUpManager extends AbstractManager
{
    protected PDO $pdo;
    public const TABLE = '';

    public function insert(array $item): int
    {
        $statement = $this->pdo->prepare("INSERT INTO USER " . self::TABLE . " (` user_name`,` email`,`passowrd `) VALUES (:user_name,:email,:passowrd)");
        $statement->bindValue('user_name', $item['user_name'], \PDO::PARAM_STR);
        $statement->bindValue('email', $item['email'], \PDO::PARAM_STR);
        $statement->bindValue('passowrd', $item['passowrd'], \PDO::PARAM_STR);
        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }
}
