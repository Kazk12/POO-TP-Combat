<?php

class HerosMapper {

    public static function mapToObject(array $data): Heros {

        $id = $data["id"];
        $pseudo = $data["pseudo"];
        $pv = $data["pv"];
        $attaque = $data["attaque"];

      
        return new Heros($id, $pseudo, $pv, $attaque);
    }

    
}