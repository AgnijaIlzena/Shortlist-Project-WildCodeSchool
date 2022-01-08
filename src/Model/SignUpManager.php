<?php

namespace App\Model;

class SignUpManager extends AbstractManager
{
    public const TABLE = 'user';
    protected PDO $pdo;

    public function __construct()
    {
        $connection = new Connection();
        $this->pdo = $connection->getPdoConnection();
    }

}
