<?php
include 'conexao.php';

$nomecategoria = $_POST['nomecategoria'];


$sql = "INSERT INTO 'categoria'('categoria') VALUES ($nomecategoria)";
	echo $sql;

	$inserir = mysqli_query($conexao,$sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<div class="container" style="width: 500px; margin-top: 20px">
		<center>
	<h4>Categoria adicionada</h4>
		</center>
	<div style="padding-top: 20px">
		<center>
		<a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar Nova Categoria</a>
		</center>
	</div>
	<div style="padding-top: 20px">
		<center>
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar ao inicio</a>
		</center>
	</div>

</div>