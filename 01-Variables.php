<?php
//commentaire sur une ligne
/*
 * commentaire sur plusieures lignes
 * commentaire sur pusieures lignes
 */
//Déclaration d'une variable :
//C'est une variable de type entier (int)
//le php se débrouille pour savoir le type de la variable
$monEntier = 123;
//ne pas hésiter a faire de longues variables avec des noms extremement parlants puisque l'ide permet de la retaper automatiquement
echo $monEntier;
//En php, une variable peut changer de type
$monEntier = "Bonjour";
//ici ce n'est plus un entier
//ce type de programmation est moche et est source de bugs
//Il ne vaux mieux pas le faire !!!

//Les variables de type booléen :
$monBooleen = true; //ou false

echo $monBooleen; //affiche 1

//Les opérateurs Booléens
// == égalité
// != différent
// < inférieur
// > supérieur
// <= inférieur ou égal
// >= supérieur ou égal
// && ET
// || OU
// ! NON
$a = true;
$b = false;
$c = $a && $b; //false
$c = $a || $b; //true
$c = !$a; //false
//avec les opérateurs de comparaison
//on obtient un booléen
$monEntier = 5;
$monEntier2 = 10;
$c = $monEntier == $monEntier2; //false
$c = $monEntier != $monEntier2; //true
$c = $monEntier < $monEntier2; //true
$c = $monEntier > $monEntier2; //false
$c = $monEntier <= $monEntier2; //true
$c = $monEntier >= $monEntier2; //false
// == est fait pour différencier le fait de déclarer la valeur d'une variable (=) de l'égalité (==)

//Les opérateurs mathématiques
// + addition
// - soustraction
// * multiplication
// / division
// % modulo (reste de la division entière)
$resultat = $monEntier * 5; //soit on le met dans une autre variable
echo $resultat; //affiche 25
//ou on le met dans la variable elle même
$monEntier = $monEntier * 5;
echo $monEntier;
//comme c'est assez commun on peut écrire $monEntier *= 5;
$monEntier *= 5; //équivalent à $monEntier = $monEntier*5;
//Il est important de bien commenter son code et de mettre des noms de variables parlants pour faire en sorte que si tu revienne plus tard tu sache ce que chaque ligne fait

//Les opérateurs d'incrémentations
$monEntier++; //équivalent à $monEntier=$monEntier+1;

//les opérateurs de décrémentation
$monEntier--; //équivalent à $monEntier=$monEntier-1;

//Les chaines de caractères
$maChaine = "Bonjour";
$maChaine2 = 'Bonjour';

//opérateurs de concaténation (permet de mettre plusieures chaines de caractères bout à bout)
$maChaine = $maChaine . " tout le monde";
$maChaine .= " tout le monde"; //équivalent

$message = "Le résultat est : " . $monEntier;
//quand le délimiteur de chaine est " , on peut alors mettre des variables dans la chaine
$message = "Le résultat est : $monEntier";

//quand le délimiteur de chaine est ' , on ne peut pas mettre de variables dedans, on est obligés d'utiliser le point

//quand on veut mettre un ' dans une chaine délimitée par des '
//on est obligé de mettre un \' pour dire que c'est un caractère
$maChaine = 'Aujourd\'hui';
//quand on veut mettre un " dans une chaine délimitée par des "
//on est obligés de mettre un \" pour dire que c'est un caractère
$maChaine = "Il dit \"Bonjour\"";

//les Tableaux
//tableau indexé
//c'est une variable à "cases" qui contiennnent des valeurs
//les cases sont numérotées à partir de 0
$tableau = [9, 4, 17, 8, 2];
//je peux lire en utilisant l'index
echo $tableau[0]; //affiche 9
//je peux modifier une case
$tableau[0] = 10;
//je peux ajouter une case
$tableau[5] = 20; //en donnant l'index manuellement (essayer d'être rigoureux pour ne pas se tromper et faire buguer le code
$tableau[] = 21; //en laissant le php choisir l'index

//tableau associatif ou dictionnaire
//c'est une variable à "cases" qui contiennent des valeurs
//les cases sont nommées avec des "clés"
$tableau = ["nom" => "Dupont", "prenom" => "Jean", "age" => 25];
//ancienne syntaxe
$tableau = array("nom" => "Dupont", "prenom" => "Jean", "age" => 25);
//Je peux lire en utilisant la clé
echo $tableau["nom"]; //affiche dupont
//Je peux modifier une case
$tableau["nom"] = "Durand";

//tableau multidimensionnel
//c'est un tableau qui contient des tableaux
//avec un tableau indexé tout simple
$tableau[[9, 4, 17, 8, 2], [2, 44, 57, 83, 23]];
//je peux lire en utilisant l'index
echo $tableau[0][0]; //affiche 9

//je peux mixer tableau indexé et tableau associatif
$tab[];
$tab[] = ["nom" => "Dupont", "prenom" => "Jean", "age" => 25];
$tab[] = ["nom" => "Durant", "prenom" => "Paul", "age" => 25];
//je peux lire en utilisant l'index
echo $tab[0]["nom"]; //affiche Dupont
