<?php

namespace KCS\Database;

use PDO;

class Update
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }
    public function updatePerson(array $data): void
    {
        $stmt = $this->conn->prepare(
            'UPDATE person SET first_name = :vardas, last_name = :pavarde, email =  :elpastas, phone = :telnr WHERE id = :id'
        );
        $stmt->bindParam(':vardas', $data['first_name']);
        $stmt->bindParam(':pavarde', $data['last_name']);
        $stmt->bindParam(':elpastas', $data['email']);
        $stmt->bindParam(':telnr', $data['phone']);
        $stmt->bindParam(':id', $data['id']);
        $stmt->execute();

        header('location: ./');
        //header('location: edit.php?id='.$_POST['id']);
    }

    public function createPerson(array $data): void
    {
        $stmt = $this->conn->prepare(
            'INSERT INTO person (first_name, last_name, email, phone) VALUES (:vardas, :pavarde, :elpastas, :telnr)'
        );
        $stmt->bindParam(':vardas', $data['first_name']);
        $stmt->bindParam(':pavarde', $data['last_name']);
        $stmt->bindParam(':elpastas', $data['email']);
        $stmt->bindParam(':telnr', $data['phone']);
        $stmt->execute();

        $lastInsertId = $this->conn->lastInsertId();

        header('location: ./?action=View&id='.$lastInsertId);
    }
}
