<?php
function trier(&$t){
    for ($i = 0; $i < count($t) - 1; $i++){

        for ($j = $i + 1; $j < count($t); $j++){

            if ($t[$i] > $t[$j]) {
                $temp = $t[$i];
                $t[$i] = $t[$j];
                $t[$j] = $temp;
            }
        }
    }
    //on renvoie le total du tableau
    $total = 0;
    foreach ($t as $valeur){
        $total += $valeur;
    }
    return $total;
}

//test d'appel de la fonction
$tab = [9, 4, 17, 8, 2];
$totalDuTableau = trier($tab);
echo "<hr>";
var_dump($tab);
