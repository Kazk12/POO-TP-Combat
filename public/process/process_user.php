<?php 



include_once '../../utils/autoload.php';

$validator = new ValidatorService();

$validator->checkMethods('POST');
$validator->addStrategy('pseudo', new RequiredValidator());
$validator->addStrategy('pseudo', new StringValidator(30));

// Ici on regarde si le pseudo est bien remplis et bien set

if (!$validator->validate($_POST)) {
  header('location: ../home.php');
  return;
}

$sanitizedData = $validator->sanitize($_POST);


// $securite = new HeroService();
// $pseudosecurise = $securite -> checkPseudo($_POST['pseudo']);




$heroRepository = new HerosRepository;



$newHero = new Heros(0, $sanitizedData['pseudo']);

      



$heroCreate =  $heroRepository -> create($newHero);

  header('location: ../choixHeros.php ');
  exit;



