<?php

namespace KCS\Database;

use PDO;

class ListPersons
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function visi(): array
    {
        $stmt = $this->conn->prepare('SELECT id, first_name as name, last_name as surename, email FROM person');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
