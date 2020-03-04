        <?php
            include "class_camiseta.php";
            include "cabecalho.php";
            $c = new Camiseta(); //cria novo objeto

            $c->cor_gola = $_POST["cor_gola"];
            $c->cor_camiseta = $_POST["cor_camiseta"];
            $c->qnt_mangas = $_POST["qnt_mangas"];

            $_SESSION["cami"][] = $c;
        ?>
        <h3>camiseta inserida com sucesso</h3>
    </body>
</html>