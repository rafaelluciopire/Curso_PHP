<?php
include 'conexao.php';
include 'script/password.php';

$nome_usuario = $_POST['nome_usuario'];
$enail_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];
$nivel_usuario = $_POST['nivel_usuario'];

$sql = "INSERT INTO usuarios (nome_usuario, email_usuário, senha_usuario, nivel_usuario) 
values ('$nome_usuario', '$email_usuario',sh1('$senha_usuario'),$nivel_usuario)";

$inserir = mysqli_query($conexao, $sql);
?>