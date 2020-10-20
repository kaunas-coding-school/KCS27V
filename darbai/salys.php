<?php
$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
] ;

var_dump($ceu);

foreach ($ceu as $valstybe => $sostine) {
    echo "Valstybė: $valstybe Sostinė: $sostine<br>";
}

// 1C
echo '1C<hr>';
$j = 0;
foreach ($ceu as $valstybe => $sostine) {
    if ($j % 2 === 0) {
        echo "$j] Valstybė: $valstybe Sostinė: $sostine<br>";
    }
    $j++;
}
// 1D
echo '1D<hr>';
$raide = 'a';
foreach ($ceu as $valstybe => $sostine) {
    if (strpos($valstybe, $raide) !== false || strpos($sostine, $raide) !== false ) {
        echo "Valstybė: $valstybe Sostinė: $sostine<br>";
    }
}
// 1E
echo '1E<hr>';
$ilgis  = count($ceu);
$vidurys   = ceil($ilgis / 2);
$pirmas = array_slice($ceu, $vidurys);
$antras = array_slice($ceu, 0, $vidurys);

echo '<div style="float:left">';
foreach ($pirmas as $valstybe => $sostine) {
    echo "Valstybė: $valstybe Sostinė: $sostine<br>";
}
echo '</div> <div style="float:left">';
foreach ($antras as $valstybe => $sostine) {
    echo "Valstybė: $valstybe Sostinė: $sostine<br>";
}
echo '</div>';