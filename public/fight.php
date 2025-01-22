<?php
include_once '../utils/autoload.php';

session_start();



$hero = $_SESSION['hero'];
$monster = $_SESSION['monster'];



$fightManager = new FightsManager($hero, $monster);







?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat : <?= $hero->getPseudo() ?> vs <?= $monster->getNom() ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script DEFER type="module" src="./assets/script/script.js"></script>
</head>

<?php echo $fightManager->displayFight($hero, $monster); ?>

</html>