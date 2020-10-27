<?php

namespace KCS;

class Studentas
{
    private string $name;
    private string $surename;
    private Grupe $group;
    private int $code;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSurename(string $surename): void
    {
        $this->surename = $surename;
    }

    public function setGroup(Grupe $group): void
    {
        $this->group = $group;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurename(): string
    {
        return $this->surename;
    }

    public function getGroup(): Grupe
    {
        return $this->group;
    }

    public function getCode(): int
    {
        return $this->code;
    }
}
