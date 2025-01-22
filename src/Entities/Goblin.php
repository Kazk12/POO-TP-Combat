<?php

class Goblin extends Monster
{
    

    public function __construct(string $image = "assets/images/Goblin.avif")
    {
        $this->image = $image;
        
        parent::__construct('Goblin', 50, 10, 1);
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