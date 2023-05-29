<!DOCTYPE html>
<html>
<head>
  <title>Editar cliente</title>
  <meta charset="UTF-8">
  <meta name="description" content="Site de vendas digital">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Emerson Santos">
  <link rel="stylesheet" type="text/css" href="estilocadastrocliente.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>

<div class="container" style="width: auto;">
    <nav style="background-image: linear-gradient(to right, #ff9100, #aa157b)";>
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo"> <img src="Imagens/logomappin.png" alt="logomappin" class="logoMappin"></a>        
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="listarusuarios.php"><b>Clientes</b></a></li>
          <li><a href="index.html"><b>Loja</b></a></li>
          <li><a href="listarusuarios.php"><b>Minha conta</b></a></li>
          <li><a href="collapsible.html"><b>Carrinho</b></a></li>
          <li><a href="cadastrocliente.html"><b>Cadastre-se</b></a></li>
        </ul>
      </div>
    </nav>

    <fieldset>
        <?php
        // Conexão com o banco de dados
        $conexao = mysqli_connect("localhost", "root", "", "mappin");

        // Verifica se a conexão foi estabelecida corretamente
        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        // Verifica se os dados foram enviados via método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém os dados do formulário
            $cod_cliente = $_POST["cod_cliente"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $cpf = $_POST["cpf"];
            $nascimento = $_POST["nascimento"];

            // Monta a consulta SQL para atualizar os dados do cliente
            $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', cpf='$cpf', nascimento='$nascimento' WHERE cod_cliente='$cod_cliente'";

            // Executa a consulta SQL
            if (mysqli_query($conexao, $sql)) {
                echo "Dados atualizados com sucesso.";
            } else {
                echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
            }
        } else {
            echo "Requisição inválida.";
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($conexao);
        ?>
    </fieldset>
</div>
</body>
</html>
