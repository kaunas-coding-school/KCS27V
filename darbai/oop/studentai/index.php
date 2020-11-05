<?php

use KCS\Database\Delete;
use KCS\Database\Edit;
use KCS\Database\ListPersons;
use KCS\Database\Update;
use KCS\Database\View;
use KCS\Helper;

require_once __DIR__.'/../../../vendor/autoload.php';

$conn = new PDO('mysql:host=db;dbname=kcs_db', 'devuser', 'devpass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$action = $_GET['action'] ?? null;
$format = $_GET['format'] ?? 'html';

switch ($action){
    case 'Delete':
        $delObj = new Delete($conn);
        $delObj->deletePerson($_GET['id']);
        break;
    case 'Edit':
        $delObj = new Edit($conn);
        $delObj->viewEditForm($_GET['id']);
        break;
    case 'View':
        $delObj = new View($conn);
        $delObj->viewPerson($_GET['id']);
        break;
    case 'Update':
        $delObj = new Update($conn);
        $delObj->updatePerson($_POST);
        break;
    case 'Create':
        $delObj = new Edit($conn);
        $delObj->viewCreateForm();
        break;
    case 'Store':
        $delObj = new Update($conn);
        $delObj->createPerson($_POST);
        break;
    default:
        $studentai = (new ListPersons($conn))->visi();
        Helper::spausdinti($studentai, $format);
}
