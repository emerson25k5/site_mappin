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

    $conexao = mysqli_connect("localhost", "id20834502_root", "9970@Ebds", "id20834502_mappin");

    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    $sqlClientes = "INSERT INTO clientes (nome, login, email, telefone, cpf, nascimento) VALUES ('$nome','$email','$email','$telefone','$cpf','$nascimento')";

    if (mysqli_query($conexao, $sqlClientes)) {
        $sqlUsuarios = "INSERT INTO usuarios (cpf_usuario, login, senha) VALUES ('$cpf', '$login', '$hashSenha')";

        if (mysqli_query($conexao, $sqlUsuarios)) {
            header("Location: login.html");
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