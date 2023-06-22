<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf_usuario = $_POST["cpf"];
    $senha = $_POST["pass"];

    // Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "mappin");

    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Atualização da senha
    $sql = "UPDATE usuarios SET senha = '$senha' WHERE cpf_usuario = '$cpf_usuario'";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Senha atualizada!'); setTimeout(function() { window.location.href = 'index.html'; }, 300);</script>";
    } else {
        echo "<script>alert('Erro ao atualizar a senha.');</script>";
    }

    mysqli_close($conexao);
}
?>
