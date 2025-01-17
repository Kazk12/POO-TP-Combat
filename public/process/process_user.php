<?php 

session_start();

include_once '../../utils/autoload.php';

$test = new HeroService();
$pseudosecurise = $test -> checkPseudo($_POST['pseudo']);




$heroRepository = new HerosRepository;

$heroExistant = $heroRepository -> findHero($pseudosecurise);

$newHero = new Heros(0, $pseudosecurise);

      
if($heroExistant){

    $_SESSION['heros'] = $heroExistant;
    header('location: ../choixHeros.php ');
    exit;
};


$heroCreate =  $heroRepository -> saveHeros($newHero);


if($heroCreate){

    $_SESSION['heros'] = $heroCreate;
    header('location: ../choixHeros.php ');
    exit;
};


