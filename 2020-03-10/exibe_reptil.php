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
        <h1>exibe animal: <b>repteis</b></h1>
        <form action="exibe_animal.php" method="post">
            <fieldset>
                <?php
                    include_once "repteis.php";
                    include_once "index.php";
                ?>
                <h2>lista de repteis: </h2> <br/>

                <?php
                    foreach($_SESSION["repteis"] as $i=>$m){
                        echo "
                        especie: ". $m->especie() ." <br/>
                        peso: ". $m->peso() ." <br/>
                        comprimento: ". $m->comprimento() ." <br/>
                        altura: ". $m->altura() ." <br/>
                        cor: ". $m->cor() ." <br/>
                        t_max_submerso: ". $m->t_max_submerso() ." <br/>";
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>