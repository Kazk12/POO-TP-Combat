<?php 


include_once '../../utils/autoload.php';

session_start();

$heroRepository = new HerosRepository();

$hero = $_SESSION['hero'];

$hpHero = $hero->getPv();


$soinHero = $hpHero + 70;

$hero->setPv($soinHero);

$heroRepository -> updateHp($hero);




function generateRandomMonster()
{
    $monsters = ['Goblin', 'Orc', 'Loup', 'Dragon', 'Slime'];
    $randomMonster = $monsters[array_rand($monsters)];



    switch ($randomMonster) {
        case 'Goblin':
            return new Goblin();
        case 'Orc':
            return new Orc();
        case 'Loup':
            return new Loup();
        case 'Dragon':
            return new Dragon();
        case 'Slime':
            return new Slime();
        default:
            throw new Exception("Unknown monster type");
    }
}

$monster = generateRandomMonster();

$_SESSION['monster'] = $monster;

header('Location: ../fight.php');
exit;