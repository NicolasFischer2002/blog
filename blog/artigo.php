<?php

require 'config.php';
require 'php-conteudos.php';
require 'redireciona.php';


$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo -> encontrarPorId($_GET['id']);


include 'cabecalho.php';

?>



        <!--Conteúdo-->

        <main class = "container-meu">

            <br>

            <h1><?php echo $artigo['titulo']; ?></h1>

            <br>

            <p><?php echo nl2br ($artigo['conteudo']); ?></p>

            <a href="conteudos.php">Voltar</a>

            <hr>



        </main>

         <!--Rodapé-->
    
    <?php

        include 'rodape.php';

    ?>