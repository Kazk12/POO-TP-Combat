<?php

class ClassesMapper {

    public static function mapToObject(array $data): Classe {

        $id = $data["id"];
        $image = $data["img_heros"];
        $nom = $data["nom_classe"];
       

      
        return new Classe($id, $image, $nom);
    }

    
}