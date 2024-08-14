<?php

include 'Routes/head.php'

?>
<!DOCTYPE html>
<html>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'Routes/header.php' ?>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h1>
                Area do usuário
              </h1>
              <p>
                Clicando ao lado temos temas sobre a fauna disponível na cidade de Teresópolis, com isso você pode ter um estudo sobre esse assunto antes de ir para algum lugar sem conhecimento
              </p>
              <a href="" class="">
                Começar
            </div>
          </div>
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-box">
                        <img src="imagens/animal.png" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="imagens/cadeia.png" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="imagens/habitat.png" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="imagens/especies.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
<?php print_r($_SESSION);
print_r($_POST)?>

  <!-- service section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Animais
              </h2>
              <!-- <img src="imagens/plug.png" alt=""> -->
            </div>
            <p>
              Animais são seres vivos incríveis que habitam nosso planeta Terra. Eles vêm em todas as formas, tamanhos e cores, tornando nosso mundo um lugar maravilhoso e diversificado. Dos pequenos insetos aos majestosos elefantes, cada animal desempenha um papel único no ecossistema.
              Os animais têm diferentes formas de se locomover. Alguns voam pelos céus, como os pássaros e morcegos, enquanto outros nadam nos oceanos, como os golfinhos e tubarões. Há também aqueles que preferem se deslocar por terra, como os leões e zebras.
              Cada animal tem suas próprias características e habilidades especiais. Por exemplo, os coelhos são conhecidos por seus grandes saltos, as girafas têm pescoços longos para alcançar as folhas mais altas das árvores, e os camaleões podem mudar de cor para se camuflar com o ambiente. 
              A maioria dos animais se alimenta de outros seres vivos para sobreviver. Alguns são carnívoros, caçando presas, enquanto outros são herbívoros, se alimentando principalmente de plantas. Existem também os onívoros, que comem tanto carne quanto vegetais.
              Os animais se reproduzem de diferentes maneiras. Alguns botam ovos, como as aves e répteis, enquanto outros dão à luz a filhotes vivos, como os mamíferos. Cuidar dos filhotes é uma parte importante da vida de muitos animais, envolvendo proteção, alimentação e ensinamentos.
              Além de sua importância para os ecossistemas, os animais também têm um lugar especial em nossos corações. Muitas pessoas têm animais de estimação, como cães e gatos, que trazem alegria e companheirismo para suas vidas.
              Os animais são uma parte essencial da vida na Terra e devemos valorizá-los e protegê-los. Cuidar dos animais e preservar seu habitat natural é fundamental para garantir um futuro sustentável para todas as espécies, incluindo a nossa.
            </p>
            <!-- <a href="">
              Read More -->
            </a>
          </div>
        </div>
         <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="imagens/about-img1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="imagens/about-img2.jpg" alt="" />
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
      
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Parque Nacional da Serra dos Órgãos:
              </h2>
            </div>
            <p>
              Explore a beleza natural do Parque Nacional da Serra dos Órgãos, lar de picos imponentes, trilhas desafiadoras e uma biodiversidade única. Caminhe pela famosa Trilha Petro-Teresópolis para apreciar vistas deslumbrantes e entrar em contato com a natureza intocada.

            </p>
            <a href="https://www.icmbio.gov.br/parnaserradosorgaos/guia-do-visitante.html">
              Saiba mais
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="im_container">
            <div class="img-box b1">
              <img src="imagens/deus.jpg" alt="" />
            </div>
            <div class="img-box-b b2">
              <img src="imagens/parnaso.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->




  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="imagens/tucano.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Tucano (Ramphastos spp)
              </h5>
              <p>
                Os tucanos, pertencentes ao gênero Ramphastos, são aves exóticas conhecidas por seus bicos grandes e coloridos, que se destacam em meio à densa vegetação das florestas tropicais. Originários principalmente das regiões da América Latina, estes pássaros são símbolos da biodiversidade e da complexidade dos ecossistemas em que habitam.

              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="imagens/quati.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Quati (Nasua spp)
              </h5>
              <p>
                Os quatis são membros da família Procyonidae, a mesma família dos guaxinins, e evoluíram no continente americano. Existem várias espécies de quatis, incluindo o quati-de-cauda-anelada (Nasua nasua) e o quati-de-nariz-branco (Nasua narica), cada uma adaptada a diferentes habitats que vão desde florestas tropicais até regiões montanhosas.

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- contact section -->

  <!--<section class="contact_section layout_padding">-->
  <!--  <div class="container ">-->
  <!--    <div class="heading_container">-->
  <!--      <h2>-->
  <!--        Fale conosco-->
  <!--      </h2>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-md-6">-->
  <!--        <form action="">-->
  <!--          <div>-->
  <!--            <input type="text" placeholder="Nome" />-->
  <!--          </div>-->
  <!--          <div>-->
  <!--            <input type="email" placeholder="Email" />-->
  <!--          </div>-->
  <!--          <div>-->
  <!--            <input type="text" placeholder="Telefone" />-->
  <!--          </div>-->
  <!--          <div>-->
  <!--            <input type="text" class="message-box" placeholder="Mensagem" />-->
  <!--          </div>-->
  <!--          <div class="d-flex ">-->
  <!--            <button>-->
  <!--              ENVIAR-->
  <!--            </button>-->
  <!--          </div>-->
  <!--        </form>-->
  <!--      </div>-->
  <!--      <div class="col-md-6">-->
  <!--        <div class="map_container">-->
  <!--          <div class="map-responsive">-->
  <!--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.48418556252!2d-42.98595112402695!3d-22.448432279580384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99b2fc4e7ae71d%3A0xa560f33c6b47710e!2sParque%20Nacional%20da%20Serra%20dos%20%C3%93rg%C3%A3os%20-%20PARNASO%20-%20Sede%20Teres%C3%B3polis!5e0!3m2!1spt-BR!2sbr!4v1712960384487!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->

  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact">
        <div class="row">
         
          <div class="col-md-4">
            <a href="">
              <img src="imagens/telephone-white.png" alt="">
              <span>
                Call : (21) 96785-4678
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="imagens/envelope-white.png" alt="">
              <span>
                serraselvagem@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Envie seu email">
              <button>
                Enviar
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="imagens/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="imagens/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="imagens/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="imagens/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
          
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->
  
<script>

  var _kwp = {'conta':17173, 'host': 'https://widget.karoo.com.br/home', 'color': '23272a' };
  (function (d, t) {
     var k = d.createElement(t), s = d.getElementsByTagName(t)[0];
     k.src = 'https://widget.karoo.com.br/api/embedded.js';
     s.parentNode.insertBefore(k, s)
  }(document, 'script'));
</script>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>