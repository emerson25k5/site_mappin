<?php
// Conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "mappin");

// Verifica se a conexão foi estabelecida corretamente
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Verifica se o parâmetro cod_cliente foi passado na URL
if (isset($_GET['cod_cliente'])) {
    // Obtém o código do cliente a ser editado
    $cod_cliente = $_GET['cod_cliente'];

    // Monta a consulta SQL para buscar os dados do cliente
    $sql = "SELECT * FROM clientes WHERE cod_cliente = '$cod_cliente'";
    $resultado = mysqli_query($conexao, $sql);

    // Verifica se o cliente foi encontrado
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
        // Aqui você pode exibir um formulário com os campos para edição
        ?>
        <!DOCTYPE html>
        <html>
        <head>
          <title>Editar cliente</title>
          <meta charset="UTF-8">
          <meta name="description" content="Site de vendas digital">
          <meta name="keywords" content="HTML, CSS, JavaScript">
          <meta name="author" content="Emerson Santos">
          <link rel="stylesheet" type="text/css" href="estilohome.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        </head>
        <body>
        
        <div class="container" style="width: auto;">
            <nav style="background-image: linear-gradient(to right, #ff9100, #aa157b);">
              <div class="nav-wrapper">
                <a href="home.html" class="brand-logo"> <img src="Imagens/logomappin.png" alt="logomappin" class="logoMappin"></a>        
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="listarusuarios.php"><b>Clientes</b></a></li>
                  <li><a href="home.html"><b>Loja</b></a></li>
                  <li><a href="listarusuarios.php"><b>Minha conta</b></a></li>
                  <li><a href="collapsible.html"><b>Carrinho</b></a></li>
                  <li><a href="cadastrocliente.html"><b>Cadastre-se</b></a></li>
        
              </div>
            </nav>
        
            <fieldset>
                <form action="atualizar.php" method="post">
                    <input type="hidden" name="cod_cliente" value="<?php echo $row['cod_cliente']; ?>">
                    <div class="input-field">
                        <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="telefone" id="telefone" value="<?php echo $row['telefone']; ?>">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="cpf" id="cpf" value="<?php echo $row['cpf']; ?>">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field">
                        <input type="date" name="nascimento" id="nascimento" value="<?php echo $row['nascimento']; ?>">
                        <label for="nascimento">Nascimento</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                </form>
            </fieldset>
        
            <footer class="page-footer" style="background-image: linear-gradient(to right, #ff9100, #aa157b);">
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
              <div class="footer-copyright">
                <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
              </div>
            </footer>
        </body>
        </html>
        <?php
    } else {
        echo "Cliente não encontrado.";
    }
} else {
    echo "Código do cliente não especificado.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
