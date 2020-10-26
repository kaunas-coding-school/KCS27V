<?php

require_once 'Studentas.php';
require_once 'Spausdinimas.php';
require_once 'Grupe.php';

$studentai = [];
$studentuDuomenys = [
    ['name' => 'Jonas', 'surename' => 'Jonaitis', 'groupId' => 777, 'code' => 98765432101],
    ['name' => 'Petras', 'surename' => 'petraitis', 'groupId' => 777, 'code' => 78945612304],
    ['name' => 'Ona', 'surename' => 'Oniene', 'groupId' => 777, 'code' => 65432198710],
    ['name' => 'Zita', 'surename' => 'Zitaite', 'groupId' => 777, 'code' => 74185296325],
    ['name' => 'Kestas', 'surename' => 'Kestaitis', 'groupId' => 777, 'code' => 35768921402],
];

foreach ($studentuDuomenys as $studentoDuomenys) {
    $studentas = new Studentas();
    $grupe = new Grupe($studentoDuomenys['groupId']);

    $studentas->setName($studentoDuomenys['name']);
    $studentas->setSurename($studentoDuomenys['surename']);
    $studentas->setGroup($grupe);
    $studentas->setCode($studentoDuomenys['code']);

    $studentai[] = $studentas;
}

Spausdinimas::spausdintiHtml($studentai);

