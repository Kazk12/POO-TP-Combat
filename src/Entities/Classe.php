<?php 

class Classe
{
    private int $id;
    private string $nom;
    private string $image;

    public function __construct(int $id, string $nom, string $image)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->image = $image;
    }

    // Getters et Setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}