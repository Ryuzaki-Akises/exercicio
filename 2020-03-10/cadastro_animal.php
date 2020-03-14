<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>cadastro animal </title>
        <style>
            input{
                margin: 5px;
                width: 300px;
            }
            fieldset {
                width: 350px;
            }
            select {
                width: 200px;
            }
        </style>
    </head>
    <body>
        <a href="destruir_session.php">encerrar session</a>
        <hr/>
        <h1>cadastrar animal</h1>
        <form action="instanciar.php" method="post">
            <fieldset>
                <br/>
                cadastrar animal:
                <select name="tipo">
                    <option hidden="hidden">selecione...</option>
                    <option value="ave">ave</option>
                    <option value="anfibio">anfibio</option>
                    <option value="mamifero">mamifero</option>
                    <option value="peixe">peixe</option>
                    <option value="reptil">reptil</option>
                </select>
                <br/><br/><br/>
                <input type="submit" value="proximo" />
            </fieldset>
        </form>
    </body>
</html>