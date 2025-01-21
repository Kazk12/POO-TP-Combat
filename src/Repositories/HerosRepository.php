<?php

final class HerosRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }



    public function find(int $id): ?Heros
    {
        $sql = "SELECT * FROM heros WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $heroData = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$heroData) {
            return null;
        }

        return HerosMapper::mapToObject($heroData);
    }



    public function findAll(): array
    {
        $sql = "SELECT * FROM heros";
        $stmt = $this->pdo->query($sql);
        $heroDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $heroes = [];

        foreach($heroDatas as $heroData){
            $heroes[] = HerosMapper::mapToObject($heroData);
        }

        return $heroes;
    }


    public function create(Heros $hero): void
    {
        $sql = "INSERT INTO heros (pseudo, level, pv, stat_For, stat_Agi, stat_Mag) VALUES (:pseudo, :level, :pv, stat_For, stat_Agi, stat_Mag)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(
            HerosMapper::mapToArray($hero)
        );
    }


    public function update(Heros $hero): void
    {
        $sql = "UPDATE heros SET pv = :pv WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $hero->getId(),
            'pv' => $hero->getPv()
        ]
        );
    }
}
