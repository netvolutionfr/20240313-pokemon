<?php

class Region
{
    private int $id = 0;
    private string $region = '';

    public function __construct(int $id, string $region)
    {
        $this->id = $id;
        $this->region = $region;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setRegion(string $region): void
    {
        $this->region = $region;
    }
}