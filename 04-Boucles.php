<?php
//tant que : while
//c'est comme un if qui boucle
//Exemple afficher les puissances de 2 inférieures à 10000
$puissance = 2;
while ($puissance < 10000) {
    echo $puissance . " ";
    $puissance *= 2;

}

//La boucle "Pour" : for
//pour i de 0 à 9
//3 parties dans le for :
//1) initialisation de la variable
//2)condition de sortie
//3)incrémentation
for ($i = 0; $i < 10; $i++) {
    echo "Coucou N°$i <br>";
}
//
//Les 10 premieres puissance de 2
//for ($i = 1; $i <= 10; $i++) {
//    echo pow(num: 2, $i) . " "; //2^$i
//}

//Foreach : pour chaque
//Pour chaque élément d'un tableau
//On va parcourir le tableau
//et pour chaque tour de boucle, on va récupérer la valeur dans une variable
$tab= [9, 4, 17, 8, 2];
foreach ($tab as $valeur) {
    echo $valeur . " ";
}

//pour un tableau associatif
$tab = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 25
];
foreach ($tab as $cle => $valeur) {
    echo "$cle : $valeur <br>";
}
//c'est une des principales boucles de php

