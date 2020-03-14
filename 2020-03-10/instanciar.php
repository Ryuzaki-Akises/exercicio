<?php
    $tipo= $_POST["tipo"];
    if($tipo == "mamifero"){
        include_once "cadastro_mamifero.php";

    } elseif($tipo == "ave") {
        include_once "cadastro_ave.php";

    } elseif($tipo == "reptil") {
        include_once "cadastro_repteis.php";

    } elseif($tipo == "anfibio") {
        include_once "cadastro_anfibio.php";

    } elseif($tipo == "peixe") {
        include_once "cadastro_peixe.php";
    }
?>