<?php
// Inicie a sessão no início do arquivo
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION['login'])) {
    // O usuário não está autenticado, redirecione-o para a página de login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<HTML lang="pt-BR">
  <HEAD>
    <TITLE>Mappin | Home</TITLE>

  <meta charset="UTF-8">
  <meta name="description" content="Site de vendas digital">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <link rel="stylesheet" type="text/css" href="../nav.css">
  <link rel="stylesheet" type="text/css" href="../estiloindex.css">
  <link rel="stylesheet" type="text/css" href="../Categorias/catEstilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
  

<!-- NAV -->


<nav class="navbar">
  <div class="conteudo container">
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="botao_menu">
          <li><a href="#" ><i class="material-icons" style="font-size: 200%;">shopping_cart</i></a></li>
          <li><a href="perfil.php" ><i class="material-icons" style="font-size: 200%;">account_circle</i></a></li>
          <li><a href="../encerra_sessao.php" ><i class="material-icons" style="font-size: 200%;">logout</i></a></li>
        </ul>

        <a href="index.php"><img src="../Imagens/logomappin_branco.png" class="logo_mappin" alt="logo"></a>
          
        <a class="hide-on-med-and-down red">Bem-vindo, <?php echo $_SESSION['login']; ?>!</a>

        <ul class="categorias hide-on-med-and-down">
          <li><a href="Categorias/catNovidades.html" class="dropdown-trigger" data-target="menususpenso1">Novidades</a></li>
          <li><a class="dropdown-trigger" data-target="menususpenso2">Feminino</a></li>
          <li><a class="dropdown-trigger" data-target="menususpenso3">Masculino</a></li>
          <li><a class="dropdown-trigger" data-target="menususpenso4">Infantil</a></li>    <!--Botões de Categorias-->
          <li><a class="dropdown-trigger" data-target="menususpenso5">Acessórios</a></li>
        </ul>
      
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <H2 class="namecat">Categorias</H2>
  <br>
  <hr style="background-color: white;">
  <br>
  <li><a href="Categorias/catNovidades.html" class="dropdown-trigger" id="bt" data-target="menususpenso11"><i class="material-icons" style="font-size: 200%;">star</i>Novidades</a></li>
  <li><a class="dropdown-trigger" id="bt" data-target="menususpenso22"><i class="material-icons" style="font-size: 200%;">female</i>Feminino</a></li>
  <li><a class="dropdown-trigger" id="bt" data-target="menususpenso33"><i class="material-icons" style="font-size: 200%;">male</i>Masculino</a></li>
  <li><a class="dropdown-trigger" id="bt" data-target="menususpenso44"><i class="material-icons" style="font-size: 200%;">child_care</i>Infantil</a></li>    <!--Botões de Categorias-->
  <li><a class="dropdown-trigger" id="bt" data-target="menususpenso55"><i class="material-icons" style="font-size: 200%;">sports_tennis</i>Acessórios</a></li>
<br><br><br><br><br><br>
  <div style="font-size: 20px;">
    <a>Bem-vindo, <br><?php echo $_SESSION['login']; ?>!</a>
    <a href="#" class="btn">Acessar perfil</a>
    <a href="#" class="btn">logout</a>
  </div>
</ul>


                              <!-- Lista drop -->

                  <ul id="menususpenso1" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="Categorias/catNovidades.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso2" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso3" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso4" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso5" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Ciclismo</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Corrida</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Treinando em casa</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Futebol</a></li>
                  </ul>


                  <ul id="menususpenso11" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso22" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso33" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso44" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Calçados</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Camisetas</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Acessórios</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Promoções</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
                  </ul>

                  <ul id="menususpenso55" class="dropdown-content">
                    <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Ciclismo</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Corrida</a></li>
                    <li class="back_list"><a href="primeiroitem.html">Treinando em casa</a></li> 
                    <li class="back_list"><a href="primeiroitem.html">Futebol</a></li>
                  </ul>


                  <script>
                  document.addEventListener('DOMContentLoaded', function() {
                    var dropdowns = document.querySelectorAll('.dropdown-trigger');   //JS do Menu suspenso das cetegorias
                    var options = {
                        coverTrigger: false,
                        openOnClick: true,
                        outDuration: 100
                    };
                    M.Dropdown.init(dropdowns, options);
                  });

                  document.addEventListener('DOMContentLoaded', function() {
                      var elems = document.querySelectorAll('.sidenav');
                      var instances = M.Sidenav.init(elems, options);
                      var options = {
                        edge: 'right'
                      }
                    });
                  </script>


  </HEAD>
<BODY>

  <a href="https://wa.me/qr/LLYTQXLOVC6FL1" id="menu" class="waves-effect waves-light btn btn-floating pulse" ></a>
  

  <div class="wellcome">

    <div class="section hide-on-med-and-down">
      <div class="row container">
        <h2 class="header">Bem-vindo à nova era da Mappin!</h2>
        <p class="grey-text text-darken-3 lighten-3">Prepare-se para mergulhar em um universo incrível, repleto de estilo e modernidade.</p>
      </div>
      <div class="row container">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">home</i>Tudo para o seu lar!</div>
            <div class="collapsible-body" ><a href="#">Móveis</a></div>
            <div class="collapsible-body" ><a href="#">Decoração</a></div>
            <div class="collapsible-body" ><a href="#">Utensílios domésticos</a></div>
            <div class="collapsible-body" ><a href="#">Eletrodomésticos</a></div>
            <div class="collapsible-body" ><a href="#">Cama, mesa e banho</a></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">wc</i>Quer ficar por dentro da moda?</div>
            <div class="collapsible-body" ><a href="#">Roupas femininas</a></div>
            <div class="collapsible-body" ><a href="#">Roupas masculinas</a></div>
            <div class="collapsible-body" ><a href="#">Acessórios</a></div>
            <div class="collapsible-body" ><a href="#">Calçados</a></div>
            <div class="collapsible-body" ><a href="#">Moda infantil</a></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">directions_bike</i>Qual o seu esporte favorito?</div>
            <div class="collapsible-body" ><a href="#">Cama, mesa e banho</a></div>
          </li>
        </ul>
      </div>
    </div>

    <div class="section hide-on-med-and-up">
      <div class="row container">
        <h2 class="header">Bem-vindo à nova era da</h2>
        <h2 class="header" style="font-size: 600%;">Mappin</h2>
        <p class="grey-text text-darken-3 lighten-3">Prepare-se para mergulhar em um universo incrível, repleto de estilo e modernidade.</p>
      </div>
      <div class="row container">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">home</i>Tudo para o seu lar!</div>
            <div class="collapsible-body" ><a href="#">Móveis</a></div>
            <div class="collapsible-body" ><a href="#">Decoração</a></div>
            <div class="collapsible-body" ><a href="#">Utensílios domésticos</a></div>
            <div class="collapsible-body" ><a href="#">Eletrodomésticos</a></div>
            <div class="collapsible-body" ><a href="#">Cama, mesa e banho</a></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">wc</i>Quer ficar por dentro da moda?</div>
            <div class="collapsible-body" ><a href="#">Roupas femininas</a></div>
            <div class="collapsible-body" ><a href="#">Roupas masculinas</a></div>
            <div class="collapsible-body" ><a href="#">Acessórios</a></div>
            <div class="collapsible-body" ><a href="#">Calçados</a></div>
            <div class="collapsible-body" ><a href="#">Moda infantil</a></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">directions_bike</i>Qual o seu esporte favorito?</div>
            <div class="collapsible-body" ><a href="#">Cama, mesa e banho</a></div>
          </li>
        </ul>
      </div>
    </div>

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="../Imagens/camamesabanho1.jpg">
          <div class="caption">
            <h3>Sua lar moderno e elegante</h3>
            <h5 class="light grey-text text-lighten-3">Deixa com a gente!</h5>
          </div>
        </li>
        <li>
          <img src="../Imagens/camamesabanhosofa.jpg">
          <div class="caption left-align">
            <h3>Sofas para família</h3>
            <h5 class="light grey-text text-lighten-3">Seus momentos, pedem o conforto que a Mappin tem!</h5>
          </div>
        </li>
        <li>
          <img src="../Imagens/ciclismo1.jpg">
          <div class="caption right-align">
            <h3>Ciclismo</h3>
            <h5 class="light grey-text text-lighten-3">Tudo para o seu esporte favorito!</h5>
          </div>
        </li>
        <li>
          <img src="../Imagens/proteínas.jpg">
          <div class="caption center-align">
            <h3>Nutrição, na Mappin você encontra!</h3>
            <h5 class="light grey-text text-lighten-3">Proteínas, pré-treinos e suplementação em geral!</h5>
          </div>
        </li>
        <li>
          <img src="../Imagens/modafeminina.jpg">
          <div class="caption center-align">
            <h3 style="color:black">Nutrição, na Mappin você encontra!</h3>
            <h5 class="light grey-text text-lighten-3" style="color:black">Proteínas, pré-treinos e suplementação em geral!</h5>
          </div>
        </li>
      </ul>
    </div>
            
  </div>
  

    <script>

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
    var options = {
      indicators: false
    }
  });

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems, options);
        var options = {
          responsiveThreshold: 0
        }
        });
      document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.collapsible');   
          var instances = M.Collapsible.init(elems);
          });


      document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.tap-target');
          var instances = M.TapTarget.init(elems, options);
          var options = onOpen
          });

    </script>


<div class="cards">

  <H1>Novidades</H1>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?car" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
        <b>R$599,00</b>
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?ball" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
          <b>R$599,00</b>
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?basket" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
          R$599,00
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?house" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
          R$599,00
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?car" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
          R$599,00
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?car" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
          R$599,00
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?car" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
          R$599,00
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

  <div class="card">
    <div class="card__image-holder">
      <a href="#"><img class="card__image" src="https://source.unsplash.com/300x225/?car" alt="wave"></a>
    </div>
    <div class="card_titulo">
      <h5>
          R$599,00
      </h5>
    </div>
    <div>
      <div class="card-descricao">
        Este é um exemplo de descrição do produto dentro do card.
      </div>
      <ul class="botao_card">
        <li class="add_chart btn"><a href="#" class="chart"><i class="material-icons" style="font-size: 200%;">add_shopping_cart</i></a></li>
        <li class="favorito btn"><a href="#" class="favorite"><i class="material-icons" style="font-size: 200%;">favorite_border</i></a></li>
    </ul>
      <div class="informacoes"><a href="#"><i class="material-icons" style="font-size: 200%;">expand_more</i></a></div>
    </div>
  </div>

</div>
</div>

    <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Mappin Sports</h5>
          <p class="grey-text text-lighten-4">Aqui você encontra tudo o que te faz bem!</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Redes sociais</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">TikTok</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Linkedin</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2023 Mappin
      <a class="grey-text text-lighten-4 right" href="#!">Saiba mais</a>
      </div>
    </div>
    </footer>

</BODY>