<?php
if (isset($_POST['entrar'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

<<<<<<< HEAD
    $conn = new mysqli("localhost", "id20834502_root", "9970@Ebds", "id20834502_mappin");
=======
    $conn = new mysqli("localhost", "root", "", "mappin");
>>>>>>> ad08e05bafa18a040d312e48e6c636a014cca6ee

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    $login = $conn->real_escape_string($login);
    $senha = $conn->real_escape_string($senha);

    $sql = "SELECT * FROM admins WHERE login = '$login'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['senha'];

        if (password_verify($senha, $storedPassword)) {
            session_start();
            $_SESSION['login'] = $login;

            header("Location: listaclientes.php");
            exit();
        } else {
            echo "<script>alert('Senha incorreta.');</script>";
            header("Location: loginadm.html");
        }
    } else {
        echo "<script>alert('O usuário informado não está cadastrado. Você será direcionado para a tela de cadastro.');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'loginadm.html'; }, 200);</script>";
    }

    $conn->close();
}
?>
