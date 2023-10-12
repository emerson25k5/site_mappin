<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $nascimento = $_POST["nascimento"];
    $login = $_POST['email'];
    $senha = $_POST['senha'];

    $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

    require_once('conecta_mappin.php');

    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    $sqlClientes = "INSERT INTO clientes (nome, email, telefone, cpf, nascimento, login, senha) VALUES ('$nome', '$email', '$telefone','$cpf','$nascimento', '$login', '$hashSenha')";

    if (mysqli_query($conexao, $sqlClientes)) {
            header("Location: login.html");
            exit();
        }else {
        echo "Erro ao inserir o registro na tabela clientes: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>