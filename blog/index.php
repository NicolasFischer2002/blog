<?php

include 'cabecalho.php';

?>
        <!-- Carrousel-->
    <div class="container-meu mt-3">
        <br>
        <h1>Seja bem vindo!</h1>
        <br>
        <h2>Política, filosofia, história, reflexões, resenhas e muito mais você encotra aqui</h2>
        <br>
        <div  data-interval="8000" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 items" src="img/burke2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/aristóteles2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/nelson3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <main class="container-meu">
        <br><br>
        <h2>O que você econtrará no meu blog?</h2>
        <p>Comentários a respeito de passagens de livros que estou lendo, recomendações de livros que já li e são bons, reflexões a respeito de grandes frases e linhas de pensamento de grandes figuras históricas, síntese de conteúdos entorno de algum assunto específico, opiniões, vivencias e críticas. </p>

         <!-- Destaques -->
    <div class="container">
    </br>
    <h3>Destaques</h3>
    <div class="row">
      <div class="col-sm m-2">
        <div class="card">
          <img class="card-img-top" src="img/aristoteles-5.jpg">
          <div class="card-body">
            <h5 class="card-title">A busca pela felicidade segundo Aristóteles</h5>
            <a href="artigo.php?id=1" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>

      <div class="col-sm m-2">
        <div class="card">
          <img class="card-img-top" src="img/teste2.jpg">
          <div class="card-body">
            <h5 class="card-title">Nazismo & Comunismo:<em>Gêmeos do terror</em> (argumentos de comparação)</h5>
            <a href="artigo.php?id=2" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>

      <div class="col-sm m-2">
        <div class="card">
          <img class="card-img-top" src="img/inquisição.jpg">
          <div class="card-body">
            <h5 class="card-title">Galileu Galilei foi mesmo perseguido pela igreja Católica?</h5>
            <a href="artigo.php?id=3" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
   <p style="text-align: center;">Acesse a aba <a href="conteudos.php">"Conteúdos"</a> para ter acesso a mais histórias.</p></p>
    </main>

    

    <!--Rodapé-->
    
 <?php

    include 'rodape.php';

?>