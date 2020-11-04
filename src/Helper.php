<?php

namespace KCS;

use DateTime;

class Helper
{
    public static function arVyras(Studentas $studentas)
    {
        $litiesSkaicius = substr((string)$studentas->getCode(), 0, 1);

        if ($litiesSkaicius % 2 == 0) {
            return false;
        }

        return true;
    }

    public static function rastiJauniausiaStudenta(array $studentai): Studentas
    {
        $maxAmzius = 999;
        /** @var Studentas $studentas */
        foreach ($studentai as $studentas) {
            $amzius = self::gautiAmziu($studentas);
            if ($amzius < $maxAmzius) {
                $jauniausiasStudentas = $studentas;
                $maxAmzius = $amzius;
            }
        }

        return $jauniausiasStudentas;
    }

    public static function rastiVyriausiaStudenta(array $studentai): Studentas
    {
        $minAmzius = 0;
        /** @var Studentas $studentas */
        foreach ($studentai as $studentas) {
            $amzius = self::gautiAmziu($studentas);
            if ($amzius > $minAmzius) {
                $vyriausiasStudentas = $studentas;
                $minAmzius = $amzius;
            }
        }

        return $vyriausiasStudentas;
    }

    public static function gautiAmziu(Studentas $studentas): float
    {
        $metai = substr($studentas->getCode(), 1, 2);
        $menuo = substr($studentas->getCode(), 3, 2);
        $diena = substr($studentas->getCode(), 5, 2);
        $tukstantmetis = substr($studentas->getCode(), 0, 1) < 5 ? 19 : 20;

        $dataString = $tukstantmetis . $metai . "-" . $menuo . "-" . $diena;

        $data = new DateTime($dataString);

        return (new DateTime('now'))->diff($data)->days;
    }

    public static function spausdintiLenteleje(array $items): void
    {
        echo '<table>
                <th>
                    <td>Vardas</td>
                    <td>Pavarde</td>
                    <td>El-pastas</td>
                    <td>Veiksmai</td>
                </th>
        ';
        foreach ($items as $item) {
            $vardas = $item['name'];
            $pavarde = $item['surename'];
            $elpastas = "<a href='mailto:{$item['email']}'>{$item['email']}</a>";
            $veiskmai = "
                    <a href='?id={$item['id']}&action=Delete'>[ SALINTI ]</a>
                    <a href='?id={$item['id']}&action=View'>[ ZIURETI ]</a>
                    <a href='?id={$item['id']}&action=Edit'>[ REDAGUOTI ]</a>
            ";
            $row = "<td>$vardas</td><td>$pavarde</td><td>$elpastas</td><td>$veiskmai</td>";
            echo '<tr>'.$row.'</tr>';
        }
        echo '</table>';
    }
}
