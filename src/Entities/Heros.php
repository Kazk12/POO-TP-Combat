<?php

class Heros{
    private int $id;
    private string $pseudo;
    private int $pv;
    private int $attaque;
    private int $level;


    public function __construct(int $id = 0, string $pseudo = "Test", int $pv = 45, int $attaque = 12, $level = 1 )
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->pv = $pv;
        $this->attaque = $attaque;
        $this->level = $level; 
       
       
        
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

    public function setPv(int $hp){
        $this->pv = $hp;
        return $this;
    }

    public function setLevel(int $level){
        $this->level = $level;
        return $this;
    }

    public function setAttaque(int $attaque){
        $this->attaque = $attaque;
        return $this;
    }


    public function hit(Monster $target)
    {

        if($target->getPv() - 15 <= 0){
            $target->setPv(0);
        } else {
            $target->setPv($target->getPv() - $this->getAttaque());
        }
        
    }


    /**
     * Get the value of level
     */ 
    public function getLevel()
    {
        return $this->level;
    }
}