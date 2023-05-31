<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $nascimento = $_POST["nascimento"];

    // Conexão com o banco de dados
    $conexao = mysqli_connect("Localhost", "root", "", "mappin");

    // Verifica se a conexão foi estabelecida corretamente
    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Prepara a query de inserção
    $sql = "INSERT INTO clientes (nome, email, telefone, cpf, nascimento) VALUES ('$nome','$email','$telefone','$cpf','$nascimento')";

    // Executa a query
    if (mysqli_query($conexao, $sql)) {
        echo "Registro inserido com sucesso!";
        header("Location: index.html");
        exit();
    } else {
        echo "Erro ao inserir o registro: " . mysqli_error($conexao);

    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
}
?>
