<?php
//les structures conditionnelles
//servent à éxécuter du code en fonction d'une condition
//if
//if...else
//if...elseif...else
//Exemple : une valeur aléatoire entre 1 et 10
$valeur = rand(1, 10);
//si la valeur est paire on affiche "pair"
//sinon, on affiche "impair"
if ($valeur % 2 == 0) { //si le reste de la division par 2 est 0
    echo $valeur . " est pair";
} elseif ($valeur % 3 == 0) {
    echo $valeur . " est pair";
} else {
    echo $valeur . " est impair";
}

//opération ternaire
//condition ? valeur si vrai : valeur si faux
echo $valeur % 2 == 0 ? $valeur . " est pair" : $valeur . " est impair";

//if ($valeur % 2 == 0){
//    echo $valeur . " est pair";
//}
//else {
//    echo $valeur . " est impair";
//}0

//switch
//exemple les jours de la semaine
$jours = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
$jour = $jours[rand(0, 6)];

switch ($jour){
    case "lundi":
        echo "Piscine";
        break;
    case "mardi":
        echo "Course à pied";
        break;
    case "mercredi":
        echo "Javelot";
        break;
    case "jeudi":
        echo "Saut à la perche";
        break;
    case "vendredi":
        echo "100m";
        break;
    case "samedi":
        echo "Apéro";
        break;
    case "dimanche":
        echo "Dodo";
        break;
//    default:
//        echo "Ce n'est pas un jour de la semaine ??";
//        break;
}

