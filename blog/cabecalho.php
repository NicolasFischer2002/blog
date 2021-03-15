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
        <link href="css/forms.css" rel="stylesheet">


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

        <!--Data e hora, css em: container-meu-->

<?php

include 'data.php';

?>


        <!--Logotipo + barra de busca-->
        <header class="header container-meu">
            <div class="header__logotipo">
                <img src="img/logotipo.png" alt="Logotipo do site">
            </div>

            <!--Barra de busca-->
            <form>
            
                <input type="text" name="buscar" id="titulo" placeholder="Inoperante no momento">
            
            </form>

            <?php
            
            
            
            ?>

        </header>

        <!--Menu de links-->
        <header>
            <nav>
                <ul class="menu container-meu">
                  <li class="menu__li"><a class="a__branco" href="index.php">Home</a></li>
                  <li class="menu__li"><a class="a__branco" href="conteudos.php">Conteúdos</a></li>
                  <li class="menu__li"><a class="a__branco" href="sobre.php">Sobre</a></li>
                  <li class="menu__li"><a class="a__branco" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </header>
</html>