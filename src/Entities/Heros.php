<?php

class Heros{
    private int $id;
    private string $pseudo;
    private int $pv;
    private int $attaque;


    public function __construct(int $id = 0, string $pseudo = "Test", int $pv = 45, int $attaque = 12 )
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->pv = $pv;
        $this->attaque = $attaque;
       
       
        
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    public function getAttaque()
    {
        return $this->attaque;
    }


    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo(string $pseudo) : self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    public function herosAttaque() : string
    {
        return 'Le ' . $this->getPseudo() . ' attaque';
    }
}