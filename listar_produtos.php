<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Tretas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script><style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
    #botao {
        background-color: #017DDE;
        color: #ffffff;

    }
	</style>
</head>
<body>
<div class="container" style="margin-top: 80px">
<div style="text-align: right">
<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>
	<h3>LISTA DE PRODUTOS</h3>


<table class="table" style="margin-top: 40PX">
	<br>
  <thead>
    <tr>
      <th scope="col">Numero do Produto</th>
      <th scope="col">Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col"> Ação</th>
    </tr>
  </thead>
  
    <?php
      	include 'conexao.php';
      	$sql = "SELECT * FROM `estoque`";
      	$busca = mysqli_query($conexao,$sql);

      	while ($array = mysqli_fetch_array($busca)) {

      		$id_estoque =  $array['id_estoque']; 
      		$numproduto =  $array['numproduto']; 
      		$nomeproduto =  $array['nomeproduto']; 
      		$categoria =  $array['categoria']; 
      		$quantidade =  $array['quantidade']; 
      		$fornecedor =  $array['fornecedor'];       	
      	?>

     <tr>
      <td><?php echo $numproduto ?> </td>
      <td><?php echo $nomeproduto ?> </td>
      <td><?php echo $categoria ?> </td>
      <td><?php echo $quantidade ?> </td>
      <td><?php echo $fornecedor ?> </td>
      <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button">Editar</a>
	  <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button">Excluir</a>
	  
	  
	  
	  </td>
      
  <?php } ?>
    </tr>
    
  
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>