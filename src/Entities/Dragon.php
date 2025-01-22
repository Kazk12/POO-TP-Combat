<?php

class Dragon extends Monster
{
    

    public function __construct(string $image = "assets/images/Dragon.jpeg")
    {
        $this->image = $image;
        
        parent::__construct('Dragon', 5000, 459, 150);
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