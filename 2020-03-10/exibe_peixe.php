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
        <h1>exibe animal: <b>peixes</b></h1>
        <form action="exibe_animal.php" method="post">
            <fieldset>
                <?php
                    include_once "peixes.php";
                    include_once "index.php";
                ?>
                <h2>lista de peixes: </h2> <br/>

                <?php
                    foreach($_SESSION["peixes"] as $i=>$m){
                        echo "
                        especie: ". $m->especie() ." <br/>
                        peso: ". $m->peso() ." <br/>
                        comprimento: ". $m->comprimento() ." <br/>
                        altura: ". $m->altura() ." <br/>
                        cor: ". $m->cor() ." <br/>
                        tm_sobrevive: ". $m->tm_sobrevive() ." <br/>";
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>