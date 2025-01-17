<?php

class Orc extends Monster
{


    private string $image;

    public function __construct(string $image = "assets/images/Orc.png")
    {
      $this->image = $image;
        parent::__construct('Orc', 100, 20);
    }

     /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }
}