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

    public static function spausdinti(array $items, string $format = null): void
    {
        switch ($format) {
            case 'json':
                echo json_encode($items);
                break;
            case 'csv':
                self::formatAsCsv($items);
                break;
            case 'html':
            default:
                echo self::formatAsHtml($items);
        }
    }

    private static function formatAsCsv($array, $filename = "export.csv", $delimiter=";"): void
    {
        $f = fopen('php://memory', 'w');
        foreach ($array as $line) {
            fputcsv($f, $line, $delimiter);
        }
        fseek($f, 0);
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="'.$filename.'";');
        fpassthru($f);
    }

    private static function formatAsHtml(array $items): string
    {
        $html = '<hr>[ <a href="./?action=Create">+ ADD new person</a> ]<hr>';
        $html .= '<table>
                <th>
                    <td>ID</td>
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
            $row = "<td>{$item['id']}</td><td>$vardas</td><td>$pavarde</td><td>$elpastas</td><td>$veiskmai</td>";
            $html .= '<tr>'.$row.'</tr>';
        }
        $html .= '</table>';

        return $html;
}
}
