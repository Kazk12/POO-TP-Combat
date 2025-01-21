<?php

final class ClassesRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM classe";
        $stmt = $this->pdo->query($sql);
        $classeDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $classes = [];

        foreach($classeDatas as $classeData){
            $classes[] = ClassesMapper::mapToObject($classeData);
        }

        return $classes;
    }


}