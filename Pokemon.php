<?php
include 'Type.php';
include 'Region.php';
class Pokemon
{
    private int $id = 0;
    private string $nom = '';
    private Type $type1;
    private Type $type2;
    private Pokemon $sousevolution;
    private Pokemon $evolution;
    private Region $region;
    private int $generation = 0;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
}