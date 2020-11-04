<?php

namespace KCS\Database;

use PDO;

class View
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function viewPerson(int $id): void
    {
        $stmt = $this->conn->prepare('SELECT * FROM person WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $asmuo = $stmt->fetch();
        echo "
            Vardas: {$asmuo['first_name']}<br>
            Pavarde: {$asmuo['last_name']}<br>
            El. pastas: {$asmuo['email']}<br>
            Tel. nr.: {$asmuo['phone']}<br>
            [<a href='./'>ATGAL</a>]
        ";
    }

}