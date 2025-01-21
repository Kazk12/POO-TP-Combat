<?php

class HerosMapper {

    public static function mapToObject(array $data): Heros {

        $id = $data["id"];
        $pseudo = $data["pseudo"];
        $pv = $data["pv"];
        $attaque = $data["attaque"];

      
        return new Heros($id, $pseudo, $pv, $attaque);
    }


    public static function mapToArray(Heros $hero)
    {
        return [
            'pseudo' => $hero->getPseudo(),
            'pv' => $hero->getPv(),
            'attaque' => $hero->getAttaque(),
        ];
    }

    
}