<?php 
include_once '../utils/autoload.php';

$test = new HerosRepository();

// var_dump($test->findAll()[0]->getPseudo());






  ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Combat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

    <div class="text-center">
        <!-- Titre -->
        <h1 class="text-4xl font-extrabold mb-4">TP Combat</h1>

        <!-- Sous-titre -->
        <p class="text-xl mb-8">Choisissez votre pseudo pour commencer l'aventure</p>

        <!-- Formulaire -->
        <form class="bg-gray-800 p-6 rounded-lg shadow-lg" action="./process/process_user.php" method="post">
            <label for="pseudo" class="block text-lg mb-2">Entrez votre pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" class="w-full px-4 py-2 mb-4 text-lg bg-gray-700 text-white border-2 border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Pseudo...">
            <button type="submit" class="w-full py-2 text-lg bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg">Commencer</button>
        </form>
    </div>

</body>

</html>
