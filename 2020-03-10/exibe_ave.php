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
        <h1>exibe animal: <b>aves</b></h1>
        <form action="exibe_animal.php" method="post">
            <fieldset>
                <?php
                    include_once "aves.php";
                    include_once "index.php";
                ?>
                <h2>lista de aves: </h2> <br/>

                <?php
                    foreach($_SESSION["aves"] as $i=>$m){
                        echo "
                        especie: ". $m->especie() ." <br/>
                        peso: ". $m->peso() ." <br/>
                        comprimento: ". $m->comprimento() ." <br/>
                        altura: ". $m->altura() ." <br/>
                        cor: ". $m->cor() ." <br/>
                        alt_max_voo: ". $m->alt_max_voo() ." <br/>";
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>