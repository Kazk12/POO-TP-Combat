<?php 

include_once '../utils/autoload.php';

session_start();



$hero = $_SESSION['hero']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Combat</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Importation de TailwindCSS -->
</head>
<body class="bg-gray-900 text-white flex justify-center items-center min-h-screen">

    
    <div class="flex items-center justify-center space-x-16">
        
        <!-- Partie gauche : bouton "Continuer les combats" -->
        <div class="flex flex-col items-center bg-gray-800 p-6 rounded-lg shadow-xl w-64">
            <img src="./assets/images/Combat.jpg" alt="Continuer Combat" class="w-32 h-32 object-cover rounded-full mb-4"> 
            <h2 class="text-xl font-semibold mb-2">Combattre</h2> 
            <p class="text-gray-400 mb-4">Continuer le combat</p> 
            <form action="./process/process_continuer.php" method="POST">
                <button type="submit" class="w-full py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg">
                    Continuer
                </button> 
            </form>
        </div>

        <!-- Partie centrale : Informations du héros -->
        <div class="flex flex-col items-center bg-gray-800 p-6 rounded-lg shadow-xl w-64">
            <img src="./assets/images/images.jpg" alt="Image du Héros" class="w-32 h-32 object-cover rounded-full mb-4"> 
            <h2 class="text-xl font-semibold mb-2"><?= $hero->getPseudo() ?></h2> 
            <p class="text-gray-400 mb-4">Pv : <?= $hero->getPv() ?></p> 
        </div>

        <!-- Partie droite : image du héros et bouton "Se soigner" -->
        <div class="flex flex-col items-center bg-gray-800 p-6 rounded-lg shadow-xl w-64">
            <img src="./assets/images/Feu_De_Camp.jpg" alt="Soins" class="w-32 h-32 object-cover rounded-full mb-4"> 
            <h2 class="text-xl font-semibold mb-2">Soins</h2> 
            <p class="text-gray-400 mb-4 text-center">Soignez votre héros ici <br> (HP + 30)</p> 
            <form action="./process/process_heal.php" method="POST">
                <button type="submit" class="w-full py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg">Se soigner</button> 
            </form>
        </div>

    </div>
</body>
</html>
