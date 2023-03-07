<?php

//Exercice 1//

$names = file('https://ncode.amorce.org/ressources/Pool/MS_FULL_STACK/PHP/src/liens.txt');

foreach ($names as $name) {
    echo "<a href='$name'>$name</a><br>";
}

echo "<br><br><br><br>";

//Exercice 2//

$tab = array();

$filename = 'tab.csv';

$ligne = file($filename);

$nbTotalLignes = count($ligne);

$nbTotalColonnes = count(explode(",", $ligne[0]));

echo "<table>";

for ($i = 0; $i < $nbTotalLignes; $i++) {

    if ($i == 0) {
        echo "<thead><tr>";
    } else {
        echo "<tr>";
    }

    $ligneTab[$i] = explode(",", $ligne[$i]);

    for ($a = 0; $a < 6; $a++) {
        echo "<td>" . $ligneTab[$i][$a] . "</td>";
    }

    if ($i == 0) {
        echo "</tr></thead>";
    } else {
        echo "</tr>";
    }

}

echo "</table>";



?>