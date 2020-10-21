<?php

$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
//echo spausdinti($age);

//echo json_encode($age);

function spausdinti(array $arr): void{
    foreach ($arr as $item) {
        echo $item . "\n";
    }
}


$jsonString = '{"Peter":35,"Ben":37,"Joe":43}';

$kint = json_decode($jsonString, true);

var_dump($kint);
