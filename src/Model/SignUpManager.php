<?php

namespace App\Model;

class SignUpManager extends AbstractManager
{
    public const TABLE = 'user';

    public function insert(array $deatil): int
    {
        $query = 'INSERT INTO user(user_name, email,passowrd) VALUES (:user_name, :email,:passowrd)';
        $statement->bindValue(':user_name', $deatil['user_name'], \PDO::PARAM_STR);
        $statement->bindValue(':email', $deatil['email'], \PDO::PARAM_STR);
        $statement->bindValue(':passowrd', $deatil['passowrd'], \PDO::PARAM_STR);
        $statement->execute();

    }

}
