/*LES FONCTIONS

Ecrivez une fonction qui permette de générer un lien.*/

<?php

function createlien($lien,$titre){
    $bouton = "<a href= $lien > $titre </a>";
    echo $bouton;
}

createlien("https://www.reddit.com/", "Reddit Hug");


?>

/*Ecrivez une fonction qui calcul la somme des valeurs d'un tableau*/

<?php
$tab = array(4, 3, 8, 2);

function somme($table){
    return array_sum($table);
}

$resultat = somme($tab);
echo $resultat;
?>
