<?php 
include_once '../utils/autoload.php';

session_start();


function generateRandomMonster() {
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


var_dump($pvHeros);


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat : <?= $pseudoHeros ?> vs Monstre</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="./assets/script/script.js"></script>
</head>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

    <div class="text-center max-w-4xl w-full p-8 bg-gray-800 rounded-lg shadow-xl">
        <!-- Titre -->
        <h1 class="text-4xl font-extrabold mb-4">Combat : <?= $pseudoHeros ?> vs <?= $monster->getNom(); ?></h1>

        <!-- Statistiques du Héros -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md" id="hero" data-pv="<?= $pvHeros ?>" data-attaque="<?= $attaqueHeros ?>">
                <img src="./assets/images/images.jpg" alt="Image Du Heros" class="mx-auto w-36 h-36 object-cover">
                <h2 class="text-xl font-semibold">Héros : <?= $pseudoHeros ?></h2>
                <p class="text-gray-400">PV : <?= $pvHeros ?></p>
                <p class="text-gray-400">Attaque : <?= $attaqueHeros ?></p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md" id="monster" data-pv="<?= $monster->getPv() ?>" data-attaque="<?= $monster->getAttaque() ?>">
                <img src="<?= $monster->getImage() ?>" alt="Image Du Monstre" class="mx-auto w-36 h-36 object-cover">
                <h2 class="text-xl font-semibold">Monstre : <?= $monster->getNom(); ?></h2>
                <p class="text-gray-400">PV : <?= $monster->getPv() ?></p>
                <p class="text-gray-400">Attaque : <?= $monster->getAttaque() ?></p>
            </div>
        </div>

        <!-- Actions de combat -->
        <div class="space-y-6">
            <!-- Action de combat : Attaque -->
                <!-- <input type="hidden" name="hero_attack" value="<?= $attaqueHeros ?>">
                <input type="hidden" name="monster_attack" value="<?= $monster -> getAttaque(); ?>"> -->
                <bouton id='lancer' class="py-3 px-8 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md transition">Attaquer le Monstre</bouton>

           
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">État actuel du combat</h2>
            <p class="text-lg text-gray-300">Le combat entre <?= $pseudoHeros ?> et <?= $monster -> getNom();?> est en cours.</p>


            <p class="text-gray-400 mt-2">Attaque du héros : <?= $attaqueHeros ?></p>
            <p class="text-gray-400">Attaque du monstre : <?= $monster -> getAttaque(); ?></p>


            <p class="text-red-500 mt-4">Monstre PV : <?= $monster -> getPv(); ?></p>
            <p class="text-green-500">Héros PV : <?= $pvHeros ?></p>
        </div>
    </div>


    <script>


    let bouton = document.querySelector('#lancer');

    bouton.addEventListener("click", handleClickLancer);

    function handleClickLancer(){
        
            console.log(<?php $pvHeros ?>);

            
            
    }


    </script>



</body>

</html>


