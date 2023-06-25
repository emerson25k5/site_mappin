<?php
// Verifique se o formulário de login foi enviado
if (isset($_POST['entrar'])) {
    // Obtenha os valores do formulário
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Estabeleça uma conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "mappin");

    // Verifique se houve um erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Escape os valores para evitar injeção de SQL (opcional, mas recomendado)
    $login = $conn->real_escape_string($login);
    $senha = $conn->real_escape_string($senha);

    // Crie uma consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE login = '$login'";

    // Execute a consulta
    $result = $conn->query($sql);

    // Verifique se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Usuário encontrado, verifique a senha
        $row = $result->fetch_assoc();
        $storedPassword = $row['senha'];

        // Use a função password_verify para comparar a senha digitada com a senha armazenada
        if (password_verify($senha, $storedPassword)) {
            // Senha correta, autentique o usuário
            session_start();
            $_SESSION['login'] = $login;

            // Redirecione para a página de perfil ou dashboard
            header("Location: Privado/index.php");
            exit();
        } else {
            // Senha incorreta
            echo "Senha incorreta";
        }
    } else {
        // Usuário não encontrado
        echo "Usuário não encontrado";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>
