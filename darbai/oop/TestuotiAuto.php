<?php

class TestuotiAuto
{
    function testinisVaziavimas(Car $auto, string $greitis): void
    {
        if ($auto->gautiKuroLikuti() <= 0) {
            die("Deja su '{$auto->gautiSpalva()}' automobiliu negalime niekur vaziuoti, kuro bakas tuscias");
        }

        $auto->vaziuoti($greitis, 0.5);
        echo "\nDuru kiekis: ".$auto->gautiDuruKieki();
        echo "\nRida: ".$auto->gautiRida()."km";
        echo "\nBako likutis: ".$auto->gautiKuroLikuti()." litru";
        echo "\n\n";
    }
}
