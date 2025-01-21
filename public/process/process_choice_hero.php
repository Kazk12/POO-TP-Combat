<?php
include_once '../../utils/autoload.php';



// VALIDATION DE FORMULAIRE

$heroRepository = new HerosRepository();
$hero = $heroRepository->find($_POST['hero_id']);

if (!$hero) {
    header('Location: /public/choice-hero.php');
    exit;
}

function generateRandomMonster()
{
    $monsters = ['Goblin', 'Orc'];
    $randomMonster = $monsters[array_rand($monsters)];

    switch ($randomMonster) {
        case 'Goblin':
            return new Goblin();
        case 'Orc':
            return new Orc();
        default:
            throw new Exception("Unknown monster type");
    }
}

$monster = generateRandomMonster();

session_start();

$_SESSION['hero'] = $hero;
$_SESSION['monster'] = $monster;

header('Location: ../fight.php');
exit;