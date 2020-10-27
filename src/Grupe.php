<?php

namespace KCS;

class Grupe
{
    public const DEFAULT_LENGTH = 72;

    private string $title;
    private int $length;

    public function __construct(string $title, int $length = self::DEFAULT_LENGTH)
    {
        $this->title = $title;
        $this->length = $length;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function __toString(): string
    {
        return $this->title . " (Trukme: $this->length val.)";
    }
}
