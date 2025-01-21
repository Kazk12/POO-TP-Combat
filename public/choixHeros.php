<?php 

include_once '../utils/autoload.php';




$heroRepository = new HerosRepository();

$heroes = $heroRepository->findAll();


if(!$heroes)
{
    header("Location: ./home.php");
    exit;
}





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

    <div class="text-center max-w-4xl w-full p-6 bg-gray-800 rounded-lg shadow-xl">
        <!-- Titre -->
        <h1 class="text-4xl font-extrabold text-white mb-6">Choisissez Votre Héros</h1>
    
    <!-- Lien pour voir les héros morts -->
    <a href="./hallOfFrame.php" class="inline-block mb-4 px-6 py-3 bg-indigo-600 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition duration-200">
        Voir les héros morts
    </a>
    
    <!-- Lien pour créer un héros -->
    <a href="./home.php" class="inline-block mb-4 px-6 py-3 bg-green-600 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-200">
        Créer un héros
    </a>

      
        <p class="text-xl mb-8">Sélectionnez un héros pour commencer l'aventure</p>

        <!-- Liste de héros avec flex et grid responsive -->
        <div class="flex flex-wrap justify-center gap-8">
            <?php 
            /**
             * @var Hero $hero
             */
            foreach($heroes as $hero): ?>
           <?php if($hero->getPv() > 0) { ?>
                <div class="flex flex-col items-center bg-gray-700 p-6 rounded-lg shadow-md hover:shadow-lg transition w-64">
                    <img src="./assets/images/images.jpg" alt="Héros 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h2 class="text-lg font-semibold mt-4"><?= $hero->getPseudo() ?></h2>
                    <p class="text-gray-400">Pv : <?= $hero->getPv() ?></p>
                    <p class="text-gray-400">Attaque : <?= $hero->getAttaque() ?></p>
                    <p class="text-gray-400">Level : <?= $hero->getLevel() ?></p>
                    <form action="./process/process_choice_hero.php" method="POST">
                        <input type="hidden" name="hero_id" value="<?= htmlspecialchars($hero->getId()) ?>">
                        <button type="submit" class="mt-4 w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">Sélectionner</button>
                    </form>
                </div>
                <?php } ?>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>

