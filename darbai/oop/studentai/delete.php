<?php

$conn = new PDO('mysql:host=db;dbname=kcs_db', 'devuser', 'devpass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('DELETE FROM person WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

header('location: db.php');