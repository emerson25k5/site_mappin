<?php
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$entrar = $_POST['entrar'];

$conexao = mysqli_connect("localhost", "root", "", "mappin");

if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

if (isset($entrar)) {
    $verifica = mysqli_query($conexao, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("Erro ao selecionar");

    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
    } else {
        setcookie("login", $login);
        header("Location: login.html");
        exit();
    }
}

mysqli_close($conexao);
?>

