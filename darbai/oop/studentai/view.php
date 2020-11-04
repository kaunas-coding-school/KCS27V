<?php

$conn = new PDO('mysql:host=db;dbname=kcs_db', 'devuser', 'devpass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT * FROM person WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

$asmuo = $stmt->fetch();
echo "
    Vardas: {$asmuo['first_name']}<br>
    Pavarde: {$asmuo['last_name']}<br>
    El. pastas: {$asmuo['email']}<br>
    Tel. nr.: {$asmuo['phone']}<br>
    [<a href='db.php'>ATGAL</a>]
";