<?php

class Car
{
    private string $spalva;
    private string $greitis;
    private int $duruKiekis;
    private float $rida;
    private float $litrazas;
    private float $kuroBakas;

    public function __construct(string $spalva, float $darbinisTuris, int $duruKiekis = 2, float $rida = 0)
    {
        $this->spalva = $spalva;
        $this->duruKiekis = $duruKiekis;
        $this->rida = $rida;
        $this->kuroBakas = 0;
        $this->litrazas = 6.6 * sqrt($darbinisTuris);
    }

    public function vaziuoti(string $greitis, float $laikas = 1): void
    {
        $this->greitis = $greitis;
        $atstumas = (float)$this->greitis * $laikas;
        $sunaudojoKuro = $this->skaiciuotiIrGautiKuroSanaudas($this->greitis, $atstumas);
        $this->rida += $atstumas;

        echo "{$this->gautiSpalva()} automobilis važiuoja $laikas val. $this->greitis greičiu.".
        " Sunaudojo $sunaudojoKuro litrus kuro.";
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }

    public function gautiDuruKieki(): int
    {
        return $this->duruKiekis;
    }

    public function gautiRida(): float
    {
        return $this->rida;
    }

    public function skaiciuotiIrGautiKuroSanaudas(float $greitis = 100, float $atstumas = 0)
    {
        $sanaudos = ($greitis / $this->litrazas) / 100 * $atstumas;
        $this->rida += $atstumas;
        $this->kuroBakas -= $sanaudos;
        return round($sanaudos, 3);
    }

    public function piltiKura(float $litrai)
    {
        $this->kuroBakas += $litrai;
        echo "Pripylem $litrai litru kuro. Viso turime: $this->kuroBakas litru.\n";
    }
    public function gautiKuroLikuti(): float
    {
        return round($this->kuroBakas, 2);
    }
}
