<?php
session_start();
if (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];

<<<<<<< HEAD
  $conexao = mysqli_connect("localhost", "id20834502_root", "9970@Ebds", "id20834502_mappin");
=======
  $conexao = mysqli_connect("localhost", "root", "", "mappin");
>>>>>>> ad08e05bafa18a040d312e48e6c636a014cca6ee

  $query = "SELECT nome, telefone, email, cpf, nascimento, data_cadastro FROM clientes WHERE login = ?";
  $stmt = mysqli_prepare($conexao, $query);
  mysqli_stmt_bind_param($stmt, "s", $login);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
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
          <li><a href="#" ><i class="material-icons" style="font-size: 200%;">account_circle</i></a></li>
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
  

  <div class="tabela container">
  <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>CPF</th>
              <th>Nacimento</th>
              <th>Data cadastro</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefone']; ?></td>
            <td><?php echo $row['cpf']; ?></td>
            <td><?php echo $row['nascimento']; ?></td>
            <td><?php echo $row['data_cadastro']; ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
  </div>

<div class="container">
  <li class="btn center black"><a href="atualiza_senha.php"><i class="material-icons">key</i>Alterar senha</a></li>
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