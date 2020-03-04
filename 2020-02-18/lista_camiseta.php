    <?php
        include "Class_camiseta.php";
        include "cabecalho.php";
        ?>
        <h2>objetos "camiseta" instanciados no sistema: </h2> <br/>

        <?php
            foreach($_SESSION["cami"] as $c){
                echo "cor da gola da camiseta: <span style='color:$c->cor_gola'> $c->cor_gola </span> <br/>
                cor da camiseta: <span style='color:$c->cor_camiseta'> $c->cor_camiseta </span> <br/>
                qnt_mangas: $c->qnt_mangas <br/>
                <hr/>";
            }
        ?>

    </body>
</html>