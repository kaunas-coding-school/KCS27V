<?php
$sausainelio_vardas = 'vartotojas';
$sausainelio_reiksme = 'Tautvydas Dulskis';
setcookie($sausainelio_vardas, $sausainelio_reiksme, time() + (600), '/');
// 86400 = 1 diena
echo "Sausaineli issaugojom.";

