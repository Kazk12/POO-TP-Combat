<?php 


class Monster 
{
    protected string $nom;
    protected int $pv;
    protected int $attaque;


    public function __construct(string $nom, int $pv, int $attaque)
    {
        $this->nom = $nom;
        $this->pv = $pv;
        $this->attaque = $attaque;
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPv(): int
    {
        return $this->pv;
    }

    public function getAttaque(): int
    {
        return $this->attaque;
    }


    public function monsterAttaque() : string 
    {
        return $this->getNom() . ' attaque';
    }
}