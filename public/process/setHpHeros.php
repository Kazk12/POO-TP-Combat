<?php


session_start();





$hpHerosActuels = 45;  





echo json_encode([
    'hpHeros' => $hpHerosActuels,
   
]);






?>
