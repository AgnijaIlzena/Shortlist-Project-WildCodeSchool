<?php

namespace App\Model;

class UserManager extends AbstractManager
{
    public const TABLE = 'user';

    public function insert(array $user): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`user_name`,`email`,`passowrd`) VALUES (:user_name, :email, :passowrd)");
        $statement->bindValue('user_name', $user['user_name'], \PDO::PARAM_STR);
        $statement->bindValue('email', $user['email'], \PDO::PARAM_STR);
        $statement->bindValue('passowrd', $user['passowrd'], \PDO::PARAM_STR);

        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }




    public function checkid(string $id): ?array
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE id = :id");
        $statement->bindValue('id', $id, \PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch();
        if ($result) {
            return $result;
        } else {
            return null;
        }
    }



    public function selectOneById(int $id)
    {
        // prepared request
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }
}
