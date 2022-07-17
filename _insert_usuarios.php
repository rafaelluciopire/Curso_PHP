<?php
include 'conexao.php';
include 'script/password.php';

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];
$nivel_usuario = $_POST['nivel_usuario'];
$status        = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, nivel_usuario, status) 
values ('$nome_usuario', '$email_usuario',sha1('$senha_usuario'),$nivel_usuario,'$status')";

$inserir = mysqli_query($conexao, $sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<div class="container" style="width: 500px; margin-top: 20px">
		<center>
	<h4>Usuário Adicionado com sucesso!</h4>
		</center>
	<div style="padding-top: 20px">
		<center>
		<a href="cad_usuarios.php" role="button" class="btn btn-sm btn-primary">Cadastrar Nova Categoria</a>
		</center>
	</div>
	<div style="padding-top: 20px">
		<center>
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar ao inicio</a>
		</center>
	</div>

</div>