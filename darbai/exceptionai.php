<?php

function tikrintiSkaiciu($skaicius) {
    if(!is_numeric($skaicius)) {
        throw new Exception('Kntamasis privalo būti skaičius');
    }
}

try {
    tikrintiSkaiciu($_GET['kintamasis']);
    echo 'Jei matote šį tekstą, tuomet kintamasis yra skaičius';

} catch(Exception $exception) {
    echo 'Klaidos pranešimas: ' .$exception->getMessage();
}
