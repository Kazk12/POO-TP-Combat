<?php

class Orc extends Monster
{


    private string $image;

    public function __construct(string $image = "assets/images/Orc.png")
    {
      $this->image = $image;
        parent::__construct('Orc', 100, 20, 10);
    }

     /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }



    public function hit(Heros $target)
    {

        if($target->getPv() - 15 <= 0){
            $target->setPv(0);
        } else {
            $target->setPv($target->getPv() - $this->getAttaque());
        }
        
    }
}