<?php
//formulaire
//s'il n'y a rien dedans, c'est que le formulaire n'a pas été envoyé
//j'affiche le formulaire
if (!isset($_POST["input"])) {
    ?>
    <form method="post">
        saisissez votre puzzle input :
        <textarea textarea name="input" rows="10" cols="50"></textarea>
        <br>
        <input type="submit" value="Envoyer"/>
    </form>
    <?php
} else {
    //Sinon c'est que le formulaire à été envoyé
    //je récupère le nombre saisi
    $input = $_POST["input"];

    //première étape : découper la chaine en ligne
    //explode est une fonction qui permet de découper une chaine en fonction d'un délimiteur
    $lignes = explode("\n", $input);

    //deuxième étape : parcourir les lignes
    //récupérer les groupes par lutins
    $paquet = [];
    $lutins = [];
    foreach ($lignes as $l){
        //si $l n'est pas vide et ne contient pas que des espaces
        //trim ca enlève les espaces au début et à la fin (ça évite les erreurs)
        if (trim($l)!=""){
            //ajouter la ligne au paquet
            $paquet[]=$l;
        }
        else{
            //on stocke le paquet dans le tableau des lutins
            $lutins[]=$paquet;
            //on réinitialise le paquet
            $paquet=[];
        }
    }
    //on stocke le dernier paquet
    $lutins[]=$paquet;

    //on calcule le total par lutin et on garde le plus grand
    $max = 0;
    $top = [];
    foreach ($lutins as $lutinCourant){
        $total = 0;
        foreach ($lutinCourant as $snack){
            $total += $snack;
        }
        if ($total > $max){
            $max = $total;
        }
    }
    echo "le total est $max";

    echo "<hr>";

    foreach ($lutins as $paquetDuLutinCourant){
        $total=0;
        foreach ($paquetDuLutinCourant as $sneak){
            $total+=$sneak;
        }
        $totaux[]=$total;
    }
    //on classe $totaux par ordre décroissant
    rsort($totaux);
    //on fait le total des 3 premiers
    $total=0;
    for ($i=0; $i<3; $i++){
        $total+=$totaux[$i];
    }
    echo "le total des 3 lutins qui portent les plus est $total";
}
