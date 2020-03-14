<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>formulario animal </title>
    </head>
    <body>
        <h1>cadastrar animal</h1>
        <form action="form_animal.php" method="post">
            <?php
                if(empty($_POST["cont"]){     /* contador do cadastro */
                    include_once "cadastro_animal.php";
                } else {
                    include_once "exibe_animal.php";
                }
            ?>
        </form>
    </body>
</html>