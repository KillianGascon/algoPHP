<?php
//récupérer les lignes de caractères
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

    $input = $_POST["input"];

    $lignes = explode("\n", $input);
    $result = 0;
    foreach ($lignes as $l){
        if (trim($l)!=""){
            $resultat = strlen(trim($l));
            $reponse1=[];
            $reponse2=[];
            $reponse1[0] = substr($l, 0, $resultat/2);
            $reponse2[0] = substr($l, $resultat/2+1, $resultat);
            $commun = array_intersect($reponse1, $reponse2);
            $commun = array_unique($commun);
            foreach ($commun as $c){
                $tab=["a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5, "f"=>6, "g"=>7, "h"=>8, "i"=>9, "j"=>10, "k"=>11,
                    "l"=>12, "m"=>13, "n"=>14, "o"=>15, "p"=>16, "q"=>17, "r"=>18, "s"=>19, "t"=>20, "u"=>21, "v"=>22,
                    "w"=>23, "x"=>24, "y"=>25, "z"=>26, "A"=>27, "B"=>28, "C"=>29, "D"=>30, "E"=>31, "F"=>32, "G"=>33, "H"=>34, "I"=>35, "J"=>36, "K"=>37,
                    "L"=>38, "M"=>39, "N"=>40, "O"=>41, "P"=>42, "Q"=>43, "R"=>44, "S"=>45, "T"=>46, "U"=>47, "v"=>48,
                    "W"=>49, "X"=>50, "Y"=>51, "Z"=>52];
                $result += $tab[$commun[0]];
            }
        }
    }
    echo $reponse1[0];
    echo "<hr>";
    echo $reponse2[0];
    echo "<hr>";
    echo $result;
}
//attribuer à chaques lettres en maj et min un nombre
//regarder la lettre qui apparait dans les deux ruckstack
//compter leur résultat des priorités


