<?php 


abstract  class  Monster 
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

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    public function hit(Heros $target)
    {

        if($target->getPv() - 15 <= 0){
            $target->setPv(0);
        } else {
            $target->setPv($target->getPv() - $this->getAttaque());
        }
        
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }
}