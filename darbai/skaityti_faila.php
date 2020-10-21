<?php

$manofailas = fopen("manoDuomenys.txt", "r") or die("Nepavyko atidaryti failo!");

fwrite($manofailas, "Nauja teksto eilute\n");

fclose($manofailas);
