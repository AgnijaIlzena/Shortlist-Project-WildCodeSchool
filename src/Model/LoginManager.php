<?php

namespace App\Model;

use App\Model\Connection;
use PDO;

/**
 * Abstract class handling default manager.
 */
class LoginManager extends AbstractManager
{
    public const TABLE = 'user';

    public function checkemail(string $email): ?array
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE email = :email");
        $statement->bindValue('email', $email, \PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch();
        if ($result) {
            return $result;
        } else {
            return null;
        }
    }
}
