<?php
echo "<h1>Les premiers algorithmes</h1>";
echo "<h2>Exercice 1</h2>";
/*
 * Essayez de générer ca dans le navigateur avec des * et des <br> (rien d'autre)
 * On a le droit à une seule * et un seul <br> dans le code

        * * * * *
        * * * * *
        * * * * *
        * * * * *
        * * * * *
 */
//niveau 1 : 2 for

//for ($a=0; $a<5; $a++){
//    for ($i=0; $i<5; $i++){
//        echo "*", " ";
//    }
//    echo "<br>";
//}

//niveau 2 : 1 for, 1 if

//for ($i=0; $i<25; $i++){
//    if ($i%5==0) {
//        echo "<br>";
//    }
//    echo "*", " ";
//}

//nveau 3 : 1 for, 1 opérateur ternaire (on a le droit à 2 * pour celui la)

for ($i = 0; $i < 25; $i++){
    echo ($i + 1) % 5 == 0 ? "* <br>" : "* ";
}



echo "<h2>Exercice 2</h2>";
/*
 * essayez de générer ca dans le navigateur avec une seule * et un seul <br> dans le code

    *
    * *
    * * *
    * * * *
    * * * * *

 */

//Niveau 1

//for ($a=0; $a<5; $a++){
//    for ($i = 0; $i <= $a; $i++){
//        echo "* ";
//    }
//    echo "<br>";
//}

//Niveau 2

$nombreParLigne = 1;
$nombreAfficheDansLaLigneCourante = 0;
for ($i = 0; $i < 15; $i++){
    echo "* ";
    $nombreAfficheDansLaLigneCourante++;

    if ($nombreAfficheDansLaLigneCourante % $nombreParLigne == 0) {
        echo "<br>";
        $nombreParLigne++;
        $nombreAfficheDansLaLigneCourante = 0;
    }
}

echo "<h2>Exercice 3</h2>";

//Algo classique
//trouver le plus grand nombre dans un tableau
//$tab = [9, 4, 17, 8, 2]; //j'initialise la variable avec la premiere valeur du tableau
//$max = $tab[0]; //je récupère la taille du tableau
////on cherche la plus grande valeur
//for ($i = 1; $i<count($tab); $i++){
//    //si la valeur courante est plus grande que la valeur max
//    if ($tab[$i] > $max){
//        //alors je remplace la valeur max par la valeur courante
//        $max = $tab[$i];
//    }
//}
////version foreach
//$max = $tab[0];
//foreach ($tab as $valeur){
//    if ($valeur > $max){
//        $max = $valeur;
//    }
//}
//
//echo "le maximum est ".$max;

//implémentation d'un tri par inversion
$tableau = [9, 4, 17, 8, 2];
$maxi = $tableau[0];
$temp = 0;

for ($i = 0; $i < count($tableau) - 1; $i++){

    for ($j = $i + 1; $j < count($tableau); $j++){

        if ($tableau[$i] > $tableau[$j]) {
            $temp = $tableau[$i];
            $tableau[$i] = $tableau[$j];
            $tableau[$j] = $temp;
        }
    }
}
var_dump($tableau);
