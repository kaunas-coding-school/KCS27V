<?php

$conn = new PDO('mysql:host=db;dbname=kcs_db', 'devuser', 'devpass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare(
    'UPDATE person SET first_name = :vardas, last_name = :pavarde, email =  :elpastas, phone = :telnr WHERE id = :id'
);
$stmt->bindParam(':vardas', $_POST['first_name']);
$stmt->bindParam(':pavarde', $_POST['last_name']);
$stmt->bindParam(':elpastas', $_POST['email']);
$stmt->bindParam(':telnr', $_POST['phone']);
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

header('location: db.php');
//header('location: edit.php?id='.$_POST['id']);