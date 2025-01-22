<?php 


include_once '../../utils/autoload.php';

session_start();

$validator = new ValidatorService();

$validator->checkMethods('POST');




$validator->addStrategy('herosPv', new RequiredValidator());
$validator->addStrategy('herosPv', new IntegerValidator());

if (!$validator->validate($_POST)) {
    header('location: ../choixHeros.php');
    return;
}

$sanitizedData = $validator->sanitize($_POST);



$heroRepository = new HerosRepository();


$hero = $_SESSION['hero'];


$hero->setPv($sanitizedData['herosPv']);


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



