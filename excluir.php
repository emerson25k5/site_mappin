<?php
// Conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "mappin");

// Verifica se a conexão foi estabelecida corretamente
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Verifica se o parâmetro cod_cliente foi passado na URL
if (isset($_GET['cod_cliente'])) {
    // Obtém o código do cliente a ser excluído
    $cod_cliente = $_GET['cod_cliente'];

    // Monta a consulta SQL para excluir o registro
    $sql = "DELETE FROM clientes WHERE cod_cliente = '$cod_cliente'";


    // Executa a consulta SQL
    if (mysqli_query($conexao, $sql)) {
        // Redireciona de volta para a página de listagem de clientes
        header("Location: listarclientes.php");
        exit();
    } else {
        echo "Erro ao excluir o cliente: " . mysqli_error($conexao);
    }
} else {
    echo "Código do cliente não especificado.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
