<?php

namespace KCS\Database;

use PDO;

class Delete
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function deletePerson(int $id): void
    {
        $stmt = $this->conn->prepare('DELETE FROM person WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header('location: ./');
    }
}
