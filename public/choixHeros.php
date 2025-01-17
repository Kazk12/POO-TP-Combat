<?php 

include_once '../utils/autoload.php';
session_start();



$pseudoHeros = $_SESSION['heros']->getPseudo();
$pvHeros = $_SESSION['heros']->getPv();
$attaqueHeros = $_SESSION['heros']->getAttaque();





?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez Votre Héros</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

    <div class="text-center max-w-lg w-full p-6 bg-gray-800 rounded-lg shadow-xl">
        <!-- Titre -->
        <h1 class="text-4xl font-extrabold mb-4">Choisissez Votre Héros</h1>

        <!-- Sous-titre -->
        <p class="text-xl mb-8">Sélectionnez un héros pour commencer l'aventure</p>

        <!-- Liste de héros -->
        <div class="flex justify-center">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <img src="./assets/images/images.jpg" alt="Héros 1" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold mt-4"><?= $pseudoHeros ?></h2>
                <p class="text-gray-400">Pv : <?= $pvHeros ?></p>
                <p class="text-gray-400">Attaque : <?= $attaqueHeros ?></p>
                <form action="./fight.php" method="post">
                    <!-- <input type="hidden" name="hero" value="hero1"> -->
                    <button type="submit" class="mt-4 w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">Sélectionner</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
