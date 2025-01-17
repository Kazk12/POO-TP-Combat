<?php

final class HerosRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }



    public function findHero(string $pseudo): ?Heros
    {

        $stmt = $this->pdo->prepare("SELECT * FROM heros WHERE pseudo = :pseudo");
        $stmt->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->execute();


        $data = $stmt->fetch();



        if (!$data) {
            return null;
        }

        return HerosMapper::mapToObject($data);
    }


    public function saveHeros(Heros $heros): Heros
    {

        $stmt = $this->pdo->prepare("INSERT INTO heros (pseudo,pv,attaque) VALUES (:pseudo, :pv, :attaque)");


        $stmt->execute(
            [
                ":pseudo" => $heros->getPseudo(),
                ":pv" => $heros->getPv(),
                ":attaque" => $heros->getAttaque(),
            ]
        );

        $heros = $this->findHero($heros->getPseudo());

        
        return $heros;
    }
}
