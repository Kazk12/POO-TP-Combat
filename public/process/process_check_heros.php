<?php 


include_once '../../utils/autoload.php';

session_start();


$heroRepository = new HerosRepository();



$hero = $_SESSION['hero'];

$hero->setPv($_POST['herosPv']);


$heroRepository -> update($hero);

if($hero->getPv() <= 0) {
    header('Location: ../choixHeros.php?mort=1');
    exit;
};

if($hero->getPv() > 0) {
    header('Location: ../suite.php');
    exit;
};



