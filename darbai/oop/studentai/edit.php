<?php

$conn = new PDO('mysql:host=db;dbname=kcs_db', 'devuser', 'devpass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT * FROM person WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

$asmuo = $stmt->fetch();
echo "
    <form action='update.php' method='post'>
    <input type='hidden' name='id' value='{$asmuo['id']}' />
    Vardas: <input type='text' name='first_name' value='{$asmuo['first_name']}' /><br>
    Pavarde: <input type='text' name='last_name' value='{$asmuo['last_name']}' /><br>
    El. pastas: <input type='text' name='email' value='{$asmuo['email']}' /><br>
    Tel. nr.: <input type='text' name='phone' value='{$asmuo['phone']}' /><br>
    <input type='submit' value='Atnaujinti'>
    
    [<a href='db.php'>ATGAL</a>]
";