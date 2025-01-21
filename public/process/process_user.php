<?php 



include_once '../../utils/autoload.php';

$securite = new HeroService();
$pseudosecurise = $securite -> checkPseudo($_POST['pseudo']);




$heroRepository = new HerosRepository;



$newHero = new Heros(0, $pseudosecurise);

      



$heroCreate =  $heroRepository -> create($newHero);

  header('location: ../choixHeros.php ');
  exit;



