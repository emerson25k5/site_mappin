<?php
session_start();

if (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];

  $conexao = mysqli_connect("localhost", "root", "", "mappin");

  if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM clientes";
  $result = mysqli_query($conexao, $query);

  if (!$result) {
    die("Erro na consulta: " . mysqli_error($conexao));
  }
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
        <li><a href="#" ><i class="material-icons" style="font-size: 200%;">manage_accounts</i></a></li>
        <li><a href="encerra_sessaoADM.php" ><i class="material-icons" style="font-size: 200%;">logout</i></a></li>
        </ul>

        <a href="../index.php"><img src="../Imagens/logomappin_branco.png" class="logo_mappin" alt="logo"></a>
          
        <a class="hide-on-med-and-down red">Bem-vindo, <?php echo $_SESSION['login']; ?>!</a>
      
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <H2 class="namecat">Opções:</H2>
  <br>
</ul>



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
            <th>Data do cadastro</th>
            <th>Login</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($result && mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefone']; ?></td>
                <td><?php echo $row['cpf']; ?></td>
                <td><?php echo $row['nascimento']; ?></td>
                <td><?php echo $row['data_cadastro']; ?></td>
                <td><?php echo $row['login']; ?></td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr>
              <td colspan="7">Nenhum resultado encontrado.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
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