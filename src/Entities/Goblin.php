<?php

class Goblin extends Monster
{
    private string $image;

    public function __construct(string $image = "assets/images/Goblin.avif")
    {
        $this->image = $image;
        
        parent::__construct('Goblin', 50, 10);
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }


   
}