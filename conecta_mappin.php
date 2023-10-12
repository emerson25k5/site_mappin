<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "mappin";


$conexao = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

if($conexao->connect_error){
    die("Falhou :".$conexao->connect_error);
}
?>