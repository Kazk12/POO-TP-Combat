<?php

final class FightsManager

{

    private Heros $hero;
    private Monster $monster;

    public function __construct(Heros $hero, Monster $monster){
        $this->hero = $hero;
        $this->monster = $monster;
    }

    public function displayFight(Heros $hero, Monster $monster): string

    {

       

        ob_start();

?>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

    <div class="text-center max-w-4xl w-full p-8 bg-gray-800 rounded-lg shadow-xl">
        <!-- Titre -->
        <h1 class="text-4xl font-extrabold mb-4">Combat : <?= $hero->getPseudo() ?> vs <?= $monster->getNom(); ?></h1>

        <!-- Statistiques du Héros -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div id="hero" class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="./assets/images/images.jpg" alt="Image Du Heros" class="mx-auto w-36 h-36 object-cover">
                <h2 class="text-xl font-semibold" id="hero-name"><?= $hero->getPseudo() ?></h2>
                <p id="hero-level">Level : <?= $hero->getLevel() ?></p>
                <p id="hero-pv">PV : <?= $hero->getPv() ?></p>
                <p id="hero-attaque">Attaque : <?= $hero->getAttaque() ?></p>
            </div>

            <!-- Statistiques du Monstre -->
            <div id="monster" class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="<?= $monster->getImage() ?>" alt="Image Du Monstre" class="mx-auto w-36 h-36 object-cover">
                <h2 class="text-xl font-semibold" id="monster-name"><?= $monster->getNom(); ?></h2>
                <p id="monster-level">Level : <?= $monster->getLevel() ?></p>
                <p id="monster-pv">PV : <?= $monster->getPv() ?></p>
                <p id="monster-attaque">Attaque : <?= $monster->getAttaque() ?></p>
            </div>
        </div>

        <!-- Actions de combat -->
        <div class="space-y-6">
            <button id="lancer" class="py-3 px-8 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md transition">Attaquer le Monstre</button>
        </div>

        <div class="mt-8">
            <form action="./process/process_check_heros.php" id="continuer-form" method="POST" style="display: none;">
                <button type="submit" id="continuer" class="py-3 px-8 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md transition">Continuer</button>
            </form>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">État actuel du combat</h2>
            <p id='ici' class="text-lg text-gray-300">Le combat entre <?= $hero->getPseudo() ?> et <?= $monster->getNom(); ?> est en cours.</p>


        </div>
    </div>


</body>

<?php

        return ob_get_clean();
    }
}