<?php 

class HeroService 
{

    public function  checkPseudo (string $pseudo) : string {
    if (!isset($pseudo) || empty(trim($pseudo))) {
        header("Location: ../home.php?error=1");
        exit;
    }

    $pseudoSecu = htmlspecialchars(trim($pseudo));

    




    return $pseudoSecu;
    
}


}