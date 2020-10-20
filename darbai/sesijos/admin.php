<?php
// Šią kodo dalį talpiname kiekviename puslapyje kurį norime apsaugoti

// Visuomet pirma startuojam sesija
session_start();

if (isset($_SESSION['ar_prisijunges'])) {
    // Paimkite vartotojo duomenis iš duomenų bazės naudodami vartotojo ID
    echo 'Admino slaptas meniu <br> <a href="logout.php">Atsijungti</a>';
} else {
    // Nukreipia lankytoją į prisijungimo skriptą
    header("Location: index.php?logged=false");
}
