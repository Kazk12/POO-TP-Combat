<?php

abstract class Heros{
    private int $id;
    private int $id_classe;
    private string $pseudo;
    private int $level;
    private int $pv;
    private int $stat_For;
    private int $stat_Agi;
    private int $stat_Mag;
    private Classe $classe;


    public function __construct(int $id = 0, int $id_classe = 0, string $pseudo = "Test", int $level = 1, int $pv = 45, int $stat_For = 12, int $stat_Agi = 12, int $stat_Mag = 12 )
    {
        $this->id = $id;
        $this->id_classe = $id_classe;
        $this->pseudo = $pseudo;
        $this->level = $level;
        $this->pv = $pv;
        $this->stat_For = $stat_For;
        $this->stat_Agi = $stat_Agi;
        $this->stat_Mag = $stat_Mag;
       
       
        
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

    public function herosAttaque() : string
    {
        return 'Le ' . $this->getPseudo() . ' attaque';
    }



    public function hit(Monster $target)
    {

        if($target->getPv() - 15 <= 0){
            $target->setPv(0);
        } else {
            $target->setPv($target->getPv() - $this->getAttaque());
        }
        
    }

}