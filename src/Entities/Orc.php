<?php

class Orc extends Monster
{


    

    public function __construct(string $image = "assets/images/Orc.png")
    {
      $this->image = $image;
        parent::__construct('Orc', 100, 20, 10);
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