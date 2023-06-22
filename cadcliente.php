<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $nascimento = $_POST["nascimento"];
    $login = $_POST['email'];

    // Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "mappin");

    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Inserção na tabela clientes
    $sqlClientes = "INSERT INTO clientes (nome, email, telefone, cpf, nascimento) VALUES ('$nome','$email','$telefone','$cpf','$nascimento')";

    if (mysqli_query($conexao, $sqlClientes)) {
        // Inserção na tabela usuarios
        $sqlUsuarios = "INSERT INTO usuarios (cpf_usuario, login, senha) VALUES ('$cpf', '$login', '$cpf')";

        if (mysqli_query($conexao, $sqlUsuarios)) {
            header("Location: cadastropass.html");
            exit();
        } else {
            echo "Erro ao inserir o registro na tabela usuarios: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao inserir o registro na tabela clientes: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>