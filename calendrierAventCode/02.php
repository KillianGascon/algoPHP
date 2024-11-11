<?php
//récupérer les valeurs de la stratégie
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
    $coupTotal = 0;

    foreach ($lignes as $l) {
        if (trim($l) != "") {
            $responses = explode(" ", trim($l));
            $responses[0];
            $responses[1];

            //pour chaque combinaison, calculer le score
            if ($responses[0] == "A") {
                if ($responses[1] == "X") {
                    $coupTotal += 3;
                }
                if ($responses[1] == "Y") {
                    $coupTotal += 4;
                }
                if ($responses[1] == "Z") {
                    $coupTotal += 8;
                }
            }
            if ($responses[0] == "B") {
                if ($responses[1] == "X") {
                    $coupTotal += 1;
                }
                if ($responses[1] == "Y") {
                    $coupTotal += 5;
                }
                if ($responses[1] == "Z") {
                    $coupTotal += 9;
                }
            }
            if ($responses[0] == "C") {
                if ($responses[1] == "X") {
                    $coupTotal += 2;
                }
                if ($responses[1] == "Y") {
                    $coupTotal += 6;
                }
                if ($responses[1] == "Z") {
                    $coupTotal += 7;
                }
            }

        }
    }
    echo $coupTotal;
}

$coup[] = $responses;


