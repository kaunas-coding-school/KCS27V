<?php

class TestuotiAuto
{
    function testinisVaziavimas(Car $auto, string $greitis): void
    {
        $auto->vaziuoti($greitis, 0.5);
        echo "\nDuru kiekis: ".$auto->gautiDuruKieki();
        echo "\nRida: ".$auto->gautiRida()."km";
        echo "\n\n";
    }
}
