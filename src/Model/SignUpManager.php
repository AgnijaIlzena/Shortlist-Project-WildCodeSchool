<?php

namespace App\Model;

class SignUpManager extends AbstractManager
{
    public const TABLE = 'user';
    public function insert(array $user): int
    {
        $password = $user['passowrd'];
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`user_name`,`email`,`passowrd`) VALUES (:user_name,:email,:passowrd)");
        $statement->bindValue('user_name', $user['user_name'], \PDO::PARAM_STR);
        $statement->bindValue('email', $user['email'], \PDO::PARAM_STR);
        $statement->bindValue('passowrd', $hashPassword, \PDO::PARAM_STR);
        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }
    public function checkemail(string $email): bool
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE email=:email");
        $statement->bindValue('email', $email, \PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch();
        if ($result != null) {
            return false;
        } else {
            return true;
        }
    }
}
