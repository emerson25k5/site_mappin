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

<<<<<<< HEAD
    $conexao = mysqli_connect("localhost", "id20834502_root", "9970@Ebds", "id20834502_mappin");
=======
    $conexao = mysqli_connect("localhost", "root", "", "mappin");
>>>>>>> ad08e05bafa18a040d312e48e6c636a014cca6ee

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