<?php
//s'il n'y a rien dedans, c'est que le formulaire n'a pas été envoyé
//j'affiche le formulaire
if (!isset($_POST["nombre"])) {
    ?>
    <form method="post">
        Saisissez un nombre : <input type="number" min="0" max="1000000" name="nombre"/>
        <br>
        <input type="submit" value="Envoyer"/>
    </form>
    <?php
} else {
    //Sinon c'est que le formulaire à été envoyé
    //je récupère le nombre saisi
    $nombre = $_POST["nombre"];

    //Afficher si c'est pair ou impair
    if ($nombre % 2 == 0) {
        echo $nombre . " est pair";
    } else {
        $nombre . " est impair";
    }
}
