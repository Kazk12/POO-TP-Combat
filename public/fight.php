<?php
include_once '../utils/autoload.php';

session_start();


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


$pseudoHeros = $_SESSION['heros']->getPseudo();
$pvHeros = $_SESSION['heros']->getPv();
$attaqueHeros = $_SESSION['heros']->getAttaque();

$monster = generateRandomMonster();

$herosObject = $_SESSION['heros'];


// var_dump($_SESSION);


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat : <?= $pseudoHeros ?> vs Monstre</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script DEFER type="module" src="./assets/script/script.js"></script>
</head>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

    <div class="text-center max-w-4xl w-full p-8 bg-gray-800 rounded-lg shadow-xl">
        <!-- Titre -->
        <h1 class="text-4xl font-extrabold mb-4">Combat : <?= $pseudoHeros ?> vs <?= $monster->getNom(); ?></h1>

        <!-- Statistiques du Héros -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div id="hero" class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="./assets/images/images.jpg" alt="Image Du Heros" class="mx-auto w-36 h-36 object-cover">
                <h2 class="text-xl font-semibold" id="hero-name"><?= $pseudoHeros ?></h2>
                <p id="hero-pv">PV : <?= $pvHeros ?></p>
                <p id="hero-attaque">Attaque : <?= $attaqueHeros ?></p>
            </div>

            <!-- Statistiques du Monstre -->
            <div id="monster" class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="<?= $monster->getImage() ?>" alt="Image Du Monstre" class="mx-auto w-36 h-36 object-cover">
                <h2 class="text-xl font-semibold" id="monster-name"><?= $monster->getNom(); ?></h2>
                <p id="monster-pv">PV : <?= $monster->getPv() ?></p>
                <p id="monster-attaque">Attaque : <?= $monster->getAttaque() ?></p>
            </div>
        </div>

        <!-- Actions de combat -->
        <div class="space-y-6">
            <button id="lancer" class="py-3 px-8 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md transition">Attaquer le Monstre</button>
        </div>

        <div class="mt-8">
            <form action="./choixHeros.php" id="continuer-form" method="POST" style="display: none;">
                <button type="button" id="continuer" class="py-3 px-8 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md transition">Continuer</button>
            </form>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">État actuel du combat</h2>
            <p id='ici' class="text-lg text-gray-300">Le combat entre <?= $pseudoHeros ?> et <?= $monster->getNom(); ?> est en cours.</p>


        </div>
    </div>


    <!-- <script>


let lancer = document.querySelector('#lancer');

lancer.addEventListener('click', handleClickLancer);

function handleClickLancer(){
    


 fetch('./process/attaque.php')
        .then(response => response.json())
        .then(data => {
            console.log('Prix mis à jour:', data);
            
            if (data.status === 'success') {
             console.log('C est good')

            }
        })
        .catch(error => {
            console.error('Erreur lors de l\'ajout de sucre:', error);
        });


}









</script> -->

















</body>

</html>