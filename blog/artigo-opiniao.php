<?php

include 'php-artigo-opiniao.php'

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-sacel=1.0">
        <title>Blog do Fischer</title>

        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <!--Chamadas CSS bootstrap-->
        <link href="css/bootstrap-reboot.css" rel="stylesheet">
        <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
        <link href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!--Chamadas CSS MEU-->
        <link href="css/header.css" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet">
        <link href="css/container-meu.css" rel="stylesheet">
        <link href="css/fontes.css" rel="stylesheet">
        <link href="css/rodape.css" rel="stylesheet">


        <!--Chamadas JS bootstrap-->
        <link href="js/bootstrap.bundle.js" rel="stylesheet">
        <link href="js/bootstrap.bundle.min.js" rel="stylesheet">
        <link href="js/bootstrap.js" rel="stylesheet">
        <link href="js/bootstrap.min.js" rel="stylesheet">

        <!--Chamadas JS para funcionar carousel-->
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/tooltip.min.js"></script>
        <script src="js/bootstrap.js"></script>


    </head>
    <body>
        <!--Logotipo + barra de busca-->
        <header class="header container-meu">
            <div class="header__logotipo">
                <img src="img/logotipo.png" alt="Logotipo do site">
            </div>
            <form>
              <input type="text" name="search" placeholder="Buscar..."> <!--Styles container-meu-->
            </form>
        </header>
        <!--Menu de links-->
        <header>
            <nav>
                <ul class="menu container-meu">
                    <li class="menu__li"><a class="a__branco" href="index.html">Home</a></li>
                    <li class="menu__li"><a class="a__branco" href="conteudos.php">Conteúdos</a></li>
                    <li class="menu__li"><a class="a__branco" href="sobre.html">Sobre</a></li>
                    <li class="menu__li"><a class="a__branco" href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </header>

        <main class="container-meu label1"> 

        <h1>
            <?php

            echo $artigo2['titulo'];

            ?> 
        </h1>
        <p>
            <?php 

            echo $artigo2['conteudo'];

            ?>
        </p>    

         <!--Forms de comentários-->

        </main>

        <!--Rodapé-->
    <footer class="container-rodape rodape">
        <img src="img/logotipo.png" alt="logo do site">
        <nav>
          <ul class="menu container-meu">
            <li class="menu__li"><a class="a__branco" href="index.html">Home</a></li>
            <li class="menu__li"><a class="a__branco" href="conteudos.php">Conteúdos</a></li>
            <li class="menu__li"><a class="a__branco" href="sobre.html">Sobre</a></li>
            <li class="menu__li"><a class="a__branco" href="contato.html">Contato</a></li>
          </ul>
      </nav>
      <h4 class="pcentro">© 2021 Copyright: Blog do Fischer</h4>
      </footer>
      
    </body>
</html>