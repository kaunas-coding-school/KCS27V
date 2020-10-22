<?php
include 'Car.php';
include 'TestuotiAuto.php';
$lengvasis = new Car('raudona');
$fura = new Car('Zalias', 3, 1000);
$testavimas = new TestuotiAuto();

$testavimas->testinisVaziavimas($lengvasis, '20km/h');
$testavimas->testinisVaziavimas($fura, '200');
