<?php

class Slime extends Monster
{
    

    public function __construct(string $image = "assets/images/Slime.png")
    {
        $this->image = $image;
        
        parent::__construct('Slime', 10, 5, 1);
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