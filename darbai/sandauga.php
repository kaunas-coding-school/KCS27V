<?php declare(strict_types=1);
echo '<hr>';

function sandauga(float $a, float $b): float {
    return $a * $b;
}

$z = sandauga(1.5, 2); // 3
echo sandauga(sandauga(3, 3), $z); // 27

echo '<hr>';
$j = 0;
while ($j < 10){
    echo sandauga($z, $j) . '<br>';
    $j++;
}