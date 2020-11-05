<?php

namespace KCS\Database;

use PDO;

class Edit
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function viewEditForm(int $id): void
    {
        $stmt = $this->conn->prepare('SELECT * FROM person WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $asmuo = $stmt->fetch();
        echo "
            <form action='./?action=Update' method='post'>
                <input type='hidden' name='id' value='{$asmuo['id']}' />
                Vardas: <input type='text' name='first_name' value='{$asmuo['first_name']}' /><br>
                Pavarde: <input type='text' name='last_name' value='{$asmuo['last_name']}' /><br>
                El. pastas: <input type='text' name='email' value='{$asmuo['email']}' /><br>
                Tel. nr.: <input type='text' name='phone' value='{$asmuo['phone']}' /><br>
                <input type='submit' value='Atnaujinti'>
            </form>
            [<a href='./'>ATGAL</a>]
        ";
    }

    public function viewCreateForm(): void
    {
        echo "
            <form action='./?action=Store' method='post'>
                <input type='hidden' name='id' value='' />
                Vardas: <input type='text' name='first_name' value='' /><br>
                Pavarde: <input type='text' name='last_name' value='' /><br>
                El. pastas: <input type='text' name='email' value='' /><br>
                Tel. nr.: <input type='text' name='phone' value='' /><br>
                <input type='submit' value='Saugoti'>
            </form>
            [<a href='./'>ATGAL</a>]
        ";
    }
}
