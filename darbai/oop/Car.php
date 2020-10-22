<?php

class Car
{
    private string $spalva;
    private string $greitis;
    private int $duruKiekis;
    private float $rida;

    public function __construct(string $spalva, int $duruKiekis = 2, float $rida = 0)
    {
        $this->spalva = $spalva;
        $this->duruKiekis = $duruKiekis;
        $this->rida = $rida;
    }

    public function vaziuoti(string $greitis, float $laikas = 1): void
    {
        $this->greitis = $greitis;

        echo "{$this->gautiSpalva()} automobilis važiuoja $this->greitis greičiu";

        $this->rida += (float)$this->greitis * $laikas;
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
}
