<?php
session_start(); // Inicia a sessão

// Encerra a sessão atual
session_destroy();

// Redireciona para a página de login ou qualquer outra página
header("Location: login.html");
exit();
?>