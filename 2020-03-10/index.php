<?php
    include_once "aves.php";
    include_once "mamiferos.php";
    include_once "anfibios.php";
    include_once "repteis.php";
    include_once "peixes.php";

    $tipo= $_POST["tipo"];
    $_SESSION["tipo"][] = $tipo;

    if($tipo == "mamifero"){
        $mam = new Mamiferos($_POST["tipo"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["v_max"]);
        $_SESSION["mamiferos"][] = $mam;
        $_SESSION["cont"] = 1;
        header("Location:form_animal.php");

    } elseif($tipo == "ave") {
        $av = new Aves($_POST["tipo"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["alt_max_voo"]);
        $_SESSION["aves"][] = $av;
        $_SESSION["cont"] = 1;
        header("Location:form_animal.php");

    } elseif($tipo == "reptil") {
        $rep = new Repteis($_POST["tipo"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["t_max_submerso"]);
        $_SESSION["repteis"][] = $rep;
        $_SESSION["cont"] = 1;
        header("Location:form_animal.php");

    } elseif($tipo == "anfibio") {
        $an = new Anfibios($_POST["tipo"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["t_max_submerso"]);
        $_SESSION["anfibios"][] = $an;
        $_SESSION["cont"] = 1;
        header("Location:form_animal.php");

    } elseif($tipo == "peixe") {
        $pe = new Peixes($_POST["tipo"], $_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["tm_sobrevive"]);
        $_SESSION["peixes"][] = $pe;
        $_SESSION["cont"] = 1;
        header("Location:form_animal.php");
    }
?>