<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exibe animal </title>
        <style>
            input{
                margin: 5px;
                width: 400px;
            }
            fieldset {
                width: 1000px;
            }
        </style>
    </head>
    <body>
        <form action="exibe_animal.php" method="post">
            <fieldset>
                <?php
                    if($_SESSION["tipo"][] == "mamifero"){
                        include_once "mamiferos.php";
                        include_once "index.php";
                        include_once "exibe_mamifero.php";

                    } elseif($_SESSION["tipo"][] == "ave"){
                        include_once "aves.php";
                        include_once "index.php";
                        include_once "exibe_ave.php";

                    } elseif($_SESSION["tipo"][] == "reptil"){
                        include_once "repteis.php";
                        include_once "index.php";
                        include_once "exibe_reptil.php";

                    } elseif($_SESSION["tipo"][] == "anfibio"){
                        include_once "anfibios.php";
                        include_once "index.php";
                        include_once "exibe_anfibio.php";

                    } elseif($_SESSION["tipo"][] == "peixe"){
                        include_once "peixes.php";
                        include_once "index.php";
                        include_once "exibe_peixe.php";
                    }
                ?>
            </fieldset>
            <input type="hidden" hidden="hidden" name="cont" value="0" action="form_animal.php" method="post"/> <!--contador pro form animal -->
            <a href="form_animal.php">voltar pro formulario de animais</a>
        </form>
    </body>
</html>