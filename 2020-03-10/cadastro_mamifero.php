<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>mamifero </title>
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
        <h1>cadastro do animal tipo: <b>mamifero</b></h1>
        <form action="index.php" method="post">
            <fieldset>
                <input type="hidden" hidden="hidden" name="tipo" value="mamifero"/>
                <br/>
                <input type="text" name="peso" placeholder="peso" />
                <input type="text" name="comprimento" placeholder="comprimento" />
                <br/>
                <input type="text" name="altura" placeholder="altura" />
                <input type="text" name="cor" placeholder="cor predominante" />
                <br/>
                <input type="text" name="especie" placeholder="especie" />
                <input type="text" name="v_max" placeholder="velocidade maxima" />
                <br/><br/><br/>
                <input type="submit" value="enviar" />
            </fieldset>
        </form>
    </body>
</html>