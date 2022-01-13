<?php

namespace App\Model;

class UserManager extends AbstractManager
{
    public const TABLE = 'user';

    public function selectCheckedIn(): ?array
    {
        if(isset($_SESSION['id'])) {
            $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE id = :id");
            $statement->bindValue('id', $_SESSION['id']);
            $statement->execute();
            $result = $statement->fetch();
            if ($result) {
                return $result;
            } else {
                return null;
            }
        } else {return null;}
    }
}
