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

$_SESSION['monster'] = $monster;

header('Location: ../fight.php');
exit;