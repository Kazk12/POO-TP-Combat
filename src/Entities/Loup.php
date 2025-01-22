<?php

class Loup extends Monster
{
    

    public function __construct(string $image = "assets/images/Loup.jpg")
    {
        $this->image = $image;
        
        parent::__construct('Loup', 100, 7, 3);
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