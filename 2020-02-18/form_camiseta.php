<?php
    include "cabecalho.php";
?>
        <h1>criar objeto camiseta</h1>
        <form action="instanciar_camiseta.php" method="post">
            definir cor da camiseta:
            <input type="color" name="cor_gola" />
            <br/>

            definir cor da gola da camiseta:
            <input type="color" name="cor_camiseta" />
            <br/>

            <input type="number" step="2" min="0" max="2" name="qnt_mangas" placeholder="quantidade de mangas" />
            <br/>

            <input type="submit" value="criar camiseta" />
        </form>
    </body>
</html>