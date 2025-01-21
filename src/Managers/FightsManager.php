<?php

final class FightsManager

{

    public function displayFight(Heros $hero, Monster $monster): string

    {

       

        ob_start();

?>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

    <div class="text-center max-w-4xl w-full p-8 bg-gray-800 rounded-lg shadow-xl">
    <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">État actuel du combat</h2>
            <?php while ($hero->getPv() > 0 && $monster->getPv() > 0): ?>
        <p  class="text-green-500"><?= $hero->getPseudo() ?> attaque <?= $monster->getNom() ?></p>

        <?php $hero->hit($monster) ?>

        <p  class="text-green-500"><?= $hero->getPseudo() ?> inflige <?= $hero->getAttaque() ?> dégats</p>

        <!-- Si le monstre ne survit pas à l'attaque du héros -->
        <?php if ($monster->getPv() > 0): ?>
            <p  class="text-red-500"><?= $monster->getNom() ?> attaque <?= $hero->getPseudo() ?></p>

            <?php $monster->hit($hero) ?>

            <p class="text-red-500" ><?= $monster->getNom() ?> inflige <?= $monster->getAttaque() ?>  dégats</p>
           
        <?php endif ?>

        <?php if ($monster->getPv() < 1): ?>
            <p class="text-green-500"><?= $hero->getPseudo() ?> a vaincu <?= $monster->getNom() ?> </p>
            <?php endif ?>
            <?php if ($hero->getPv() < 1): ?>
            <p class="text-red-500"><?= $monster->getNom() ?> a vaincu <?= $hero->getPseudo() ?> </p>
            <?php endif ?>

    <?php endwhile ?>


        </div>
        <!-- Titre -->
        <h1 class="text-4xl font-extrabold mb-4">Combat : <?= $hero->getPseudo() ?> vs <?= $monster->getNom(); ?></h1>

        <!-- Statistiques du Héros -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div id="hero" class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="./assets/images/images.jpg" alt="Image Du Heros" class="mx-auto w-36 h-36 object-cover">
                <h2 class="text-xl font-semibold" id="hero-name"><?= $hero->getPseudo() ?></h2>
                <p id="hero-pv">PV : <?= $hero->getPv() ?></p>
                <p id="hero-attaque">Attaque : <?= $hero->getAttaque() ?></p>
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
            <button id="lancer" class="py-3 px-8 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md transition">Continuer</button>
        </div>

        

       
    </div>



</body>

<?php

        return ob_get_clean();
    }
}