<!DOCTYPE html>
<html>
<head>
  <title>Mappin</title>
  <meta charset="UTF-8">
  <meta name="description" content="Site de vendas digital">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Emerson Santos">
  <link rel="stylesheet" type="text/css" href="estiloindex.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>

  <div class="container" style="width: auto;">
    <nav style="background-image: linear-gradient(to right, #ff9100, #aa157b)";>
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo"> <img src="Imagens/logomappin.png" alt="logomappin" class="logoMappin"></a>        
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.html"><b>Loja</b></a></li>
          <li><a href="listarusuarios.php"><b>Minha conta</b></a></li>
          <li><a href="collapsible.html"><b>Carrinho</b></a></li>
          <li><a href="cadastrocliente.html"><b>Cadastre-se</b></a></li>
      </div>
    </nav>

    <div clas="box-container" style="background-color: white;">
      <fieldset>
        <?php
        // Conexão com o banco de dados
        $conexao = mysqli_connect("localhost", "root", "", "mappin");

        // Verifica se a conexão foi estabelecida corretamente
        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        // Consulta SQL para selecionar os dados
        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($conexao, $sql);

        // Verifica se houve algum resultado
        if (mysqli_num_rows($resultado) > 0) {
            // Exibe os dados em uma tabela
            echo "<table>";
            echo "<tr><th>Código</th><th>Nome</th><th>Email</th><th>Telefone</th><th>CPF</th><th>Nascimento</th><th>Ações</th></tr>";
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $row["cod_cliente"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telefone"] . "</td>";
                echo "<td>" . $row["cpf"] . "</td>";
                echo "<td>" . $row["nascimento"] . "</td>";
                echo "<td>";
                echo "<a class='edit-btn' href='editar.php?cod_cliente=" . $row["cod_cliente"] . "'>Editar</a>";
                echo "<a class='delete-btn' href='excluir.php?cod_cliente=" . $row["cod_cliente"] . "' onclick='return confirm(\"Deseja realmente excluir este cliente?\")'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Nenhum registro encontrado.";
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($conexao);
        ?>
      </fieldset>
    </div>

    <footer class="page-footer" style="background-image: linear-gradient(to right, #ff9100, #aa157b)";>
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyrig
