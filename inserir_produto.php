<?php
include 'conexao.php';

$numproduto = $_POST['numproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade	 = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(
	`numproduto`, 
	`nomeproduto`, 
	`categoria`, 
	`quantidade`, 
	`fornecedor`) VALUES 
	($numproduto,
	'$nomeproduto',
	'$categoria',
	$quantidade,
	'$fornecedor')";

	$inserir = mysqli_query($conexao,$sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<div class="container" style="width: 500px; margin-top: 20px">
		<center>
	<h4>Produto adicionado</h4>
		</center>
	<div style="padding-top: 20px">
		<center>
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Item</a>
		</center>
	</div>

</div>