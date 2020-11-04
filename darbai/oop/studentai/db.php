<?php

use KCS\Helper;

require_once __DIR__.'/../../../vendor/autoload.php';

$conn = new PDO('mysql:host=db;dbname=kcs_db', 'devuser', 'devpass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT id, first_name as name, last_name as surename, email FROM person');
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

Helper::spausdintiLenteleje($stmt->fetchAll());
