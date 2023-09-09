<?php
session_start();

if (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senhaAntiga = $_POST['senha_antiga'];
    $senhaNova = $_POST['senha_nova'];
    $confirmarSenha = $_POST['confirmar_senha'];

<<<<<<< HEAD
    $conexao = mysqli_connect("localhost", "id20834502_root", "9970@Ebds", "id20834502_mappin");
=======
    $conexao = mysqli_connect("localhost", "root", "", "mappin");
>>>>>>> ad08e05bafa18a040d312e48e6c636a014cca6ee

    if ($conexao) {
      $query = "SELECT senha FROM usuarios WHERE login = '$login'";
      $resultado = mysqli_query($conexao, $query);

      if ($resultado) {
        if (mysqli_num_rows($resultado) === 1) {
          $row = mysqli_fetch_assoc($resultado);
          $senhaAtual = $row['senha'];

          if (password_verify($senhaAntiga, $senhaAtual)) {
            if ($senhaNova === $confirmarSenha) {
              $senhaHash = password_hash($senhaNova, PASSWORD_DEFAULT);

              $query = "UPDATE usuarios SET senha = '$senhaHash' WHERE login = '$login'";
              $resultado = mysqli_query($conexao, $query);

              if ($resultado) {
                echo "<script>alert('Senha alterada com sucesso!');</script>";
                echo "<script>setTimeout(function(){ window.location.href = 'perfil.php'; }, 100);</script>";
              } else {
                echo "<script>alert('Erro ao atualizar a senha.');</script>";
              }
            } else {
              echo "<script>alert('As senhas não coincidem.');</script>";
            }
          } else {
            echo "<script>alert('A senha antiga fornecida é inválida.');</script>";
          }
        } else {
          echo "<script>alert('Usuário não encontrado.');</script>";
        }
      } else {
        echo "<script>alert('Erro ao consultar o banco de dados.');</script>";
      }

 
      mysqli_close($conexao);
    } else {
      echo "<script>alert('Erro ao conectar ao banco de dados.');</script>";
    }
  }
}
?>
<!DOCTYPE html>
<HTML lang="pt-BR">
  <HEAD>
    <TITLE>Mappin | Atualização de senha</TITLE>

    <meta charset="UTF-8">
    <meta name="description" content="Site de vendas digital">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link rel="stylesheet" type="text/css" href="../nav.css">
    <link rel="stylesheet" type="text/css" href="../estilocadastrocliente.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
  
  <!-- NAV -->
  
  
  <nav class="navbar">
    <div class="conteudo container">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  
          <ul class="botao_menu">
            <li><a href="cadastrocliente.html" ><i class="material-icons" style="font-size: 200%;">person_add</i></a></li>
            <li><a href="carrinho.html" ><i class="material-icons" style="font-size: 200%;">shopping_cart</i></a></li>
            <li><a href="../encerra_sessao.php" ><i class="material-icons" style="font-size: 200%;">logout</i></a></li>
          </ul>
  
          <a href="../index.php"><img src="../Imagens/logomappin_branco.png" class="logo_mappin" alt="logo"></a>
          <a class="hide-on-med-and-down red">Bem-vindo, <?php echo $_SESSION['login']; ?>!</a>
          
          <ul class="categorias hide-on-med-and-down">
            <li><a class="dropdown-trigger" data-target="menususpenso1">Novidades</a></li>
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
    <li><a class="dropdown-trigger" id="bt" data-target="menususpenso11"><i class="material-icons" style="font-size: 200%;">star</i>Novidades</a></li>
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
                      <li class="back_list"><a href="primeiroitem.html">Novidades</a></li>       
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
                        var instances = M.Sidenav.init(elems);
                      });
                    </script>
  
  
    </HEAD>
 <BODY>

<div style="text-align: center">
  <h1>Crie uma nova senha</h1>
</div>


<div class="box container">
    <form class="col s12" action="" method="POST">

      <div class="input-field col s12">
        <input id="senha_antiga" type="password" name="senha_antiga"  maxlength="15" class="validate" required>
        <label for="senha_antiga" maxlength="15" style="color:black;">Senha atual</label>
      </div>

      <div class="input-field col s12">
        <input id="senha_nova" type="password" name="senha_nova" class="validate" maxlength="15" required>
        <label for="senha_nova" maxlength="15" style="color:black;">Crie uma senha</label>
      </div>

      <div class="input-field col s12">
        <input id="confirmar_senha" type="password" name="confirmar_senha" class="validate" maxlength="15" required>
        <label for="confirmar_senha" maxlength="15" style="color:black;">Repita a senha</label>
      </div>

      <input type="submit" value="Confirmar" id="submit">

      <script>

function ValidaCPF() {
  var cpf = document.getElementById("cpf").value;
  var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;
  if (cpfValido.test(cpf) == false) {
    cpf = cpf.replace(/\D/g, ""); 
    if (cpf.length == 11) {
      cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); 
      cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); 
      cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); 
      document.getElementById("cpf").value = cpf;
    } else {
      console.log("CPF inválido");
    }
  }
}
      </script>

    </form>

</div>
                  <br><br><br><br><br>

    <div>

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
 </HTML>
