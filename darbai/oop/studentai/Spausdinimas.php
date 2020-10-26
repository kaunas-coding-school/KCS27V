<?php

class Spausdinimas
{
    public static function spausdintiHtml(array $arr): void
    {
        echo '<div>';
        /** @var Studentas $studentas */
        foreach ($arr as $studentas) {
            echo "<div>
                    Studento vardas: {$studentas->getName()}<br>
                    Studento pavarde: {$studentas->getSurename()}<br>
                    Studento grupe: {$studentas->getGroup()}<br>
                    Studento kodas: {$studentas->getCode()}<br>
            </div>";
        }
        echo '<\div>';
    }

    public static function spausdintiTxt(array $arr): void
    {
        /** @var Studentas $studentas */
        foreach ($arr as $studentas) {
            echo "Studento vardas: {$studentas->getName()} 
                    Studento pavarde: {$studentas->getSurename()} 
                    Studento grupe: {$studentas->getGroup()->getTitle()} 
                    Studento kodas: {$studentas->getCode()}
                    ";
        }
    }
}
