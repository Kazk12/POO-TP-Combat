<?php 


include_once '../../utils/autoload.php';

session_start();


if(!isset($_POST['herosPv'])) {
    header('Location: ../choixHeros.php?error=1');
    exit;
};

if(!empty($_POST['herosPv'])) {
    if(!is_numeric($_POST['herosPv'])) {
        header('Location: ../choixHeros.php?error=3');
        exit;
    };
};

if(!isset($_SESSION['hero'])) {
    header('Location: ../choixHeros.php?error=2');
    exit;
};




$heroRepository = new HerosRepository();



$hero = $_SESSION['hero'];


$hero->setPv($_POST['herosPv']);


$heroRepository -> updateHp($hero);


if($hero->getPv() <= 0) {
    header('Location: ../choixHeros.php?mort=1');
    exit;
};

if($hero->getPv() > 0) {
    $heroPv = $hero->getPv();
    $heroLevel = $hero->getLevel();
    $heroAttaque = $hero->getAttaque();

    if($_SESSION['monster'] ->getNom() == 'Goblin') {
        $heroLevel += 1;
        $hero->setLevel($heroLevel);
        $heroAttaque += 2;
        $hero->setAttaque($heroAttaque);
        $heroPv += 10;
        $hero->setPv($heroPv);
        $heroRepository -> updateLevel($hero);

       
    };

    if($_SESSION['monster'] ->getNom() == 'Orc') {
        $heroLevel += 5;
        $hero->setLevel($heroLevel);
        $heroAttaque += 10;
        $hero->setAttaque($heroAttaque);
        $heroPv += 50;
        $hero->setPv($heroPv);
        $heroRepository -> updateLevel($hero);

        
    };

    if($_SESSION['monster'] ->getNom() == 'Slime') {
        $heroLevel += 1;
        $hero->setLevel($heroLevel);
        $heroAttaque += 2;
        $hero->setAttaque($heroAttaque);
        $heroPv += 10;
        $hero->setPv($heroPv);
        $heroRepository -> updateLevel($hero);

        
    };

    if($_SESSION['monster'] ->getNom() == 'Loup') {
        $heroLevel += 3;
        $hero->setLevel($heroLevel);
        $heroAttaque += 6;
        $hero->setAttaque($heroAttaque);
        $heroPv += 30;
        $hero->setPv($heroPv);
        $heroRepository -> updateLevel($hero);

        
    };

    if($_SESSION['monster'] ->getNom() == 'Dragon') {
        $heroLevel += 150;
        $hero->setLevel($heroLevel);
        $heroAttaque += 300;
        $hero->setAttaque($heroAttaque);
        $heroPv += 1500;
        $hero->setPv($heroPv);
        $heroRepository -> updateLevel($hero);

        
    };



    header('Location: ../suite.php');
    exit;
    
};



