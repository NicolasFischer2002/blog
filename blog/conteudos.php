<?php 

require 'config.php';

include 'php-conteudos.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

include 'cabecalho.php';

?>
        <main class="container-meu">
            <br>
                <h1>Conteudos</h1>
                    <?php foreach ($artigos as $artigo) : ?>

                        <h2>
                            <br>
                            <a href="artigo.php?id=<?php echo $artigo['id']; ?>"> <?php echo $artigo['titulo']; ?> </a>
                        </h2>
                    
                    <?php endforeach;?>
        </main>
        
         <!--Rodapé-->
<?php

     include 'rodape.php';

?>