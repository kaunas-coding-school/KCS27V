<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include 'Car.php';
include 'TestuotiAuto.php';
$lengvasis = new Car('Raudonas', 2);
$fura = new Car('Zalias', 5, 3, 1000);
$testavimas = new TestuotiAuto();

$lengvasis->piltiKura(31.5);
$lengvasis->piltiKura(50.37);
$testavimas->testinisVaziavimas($lengvasis, '20km/h');
$testavimas->testinisVaziavimas($fura, '200');
