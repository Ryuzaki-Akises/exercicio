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
        <h1>exibe animal: <b>mamifero</b></h1>
        <form action="exibe_animal.php" method="post">
            <fieldset>
                <?php
                    include_once "mamiferos.php";
                    include_once "index.php";
                ?>
                <h2>lista de mamiferos: </h2> <br/>

                <?php
                    foreach($_SESSION["mamiferos"] as $i=>$m){
                        echo "
                        qnt_porta: ". $m->get_tipo() ." <br/>
                        v_max: ". $m->get_peso() ." <br/>
                        v_atual: ". $m->get_comprimento() ." <br/>

                        <form method='post' action='acelerar_frear.php'>
                            <input type='number' name='tp' placeholder='tempo de aceleraçao / frenagem' />
                            <input type='number' name='af' placeholder='acelerar / frear' />
                            <br/>

                            <input type='radio' class='radio' name='tipo' value='a' /> acelerar
                            <input type='radio' class='radio' name='tipo' value='f' /> frear
                            <br/>

                            <input type='hidden' name='id' value='$i' />
                            <input type='submit' value='acelerar / frear' />
                        </form>
                        <hr/>";
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>