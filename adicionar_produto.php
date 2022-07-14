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
<div class="container" id="tamanhoContainer" style="margin-top: 80px">
	<div style="text-align: right">
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
	</div>
	<h4>FORMULARIO DE CADASTRO</h4>
<form action="inserir_produto.php" method="post">
  <div class="mb-3">
    <label>Nr Produto</label>
    <input type="number" class="form-control" name="numproduto" placeholder="Insira o numero do produto" autocomplete="off" required>
  </div>
   <div class="mb-3">
    <label>Nome Produto</label>
    <input type="Text" class="form-control" name="nomeproduto" placeholder="Insira o Nome do produto" autocomplete="off" required>
   </div>
   <label>Categoria</label>
 <select class="form-select form-select-lg mb-3" name="categoria">
   <?php
 include 'conexao.php';
 $sql = "SELECT * FROM categoria ORDER BY categoria ASC";
 $buscar = mysqli_query($conexao,$sql);
 while($array = mysqli_fetch_array($buscar)){
	 $id_categoria = $array['id_categoria'];
	 $nome_categoria = $array['categoria'];
	 
	?> 
  
  <option><?php echo $nome_categoria ?></option>
  
 <?php } ?>
  
 </select>
 
	
  <div class="mb-3">
    <label>Quantidade</label>
    <input type="number" class="form-control" placeholder="Insira a Quantidade do produto" name="quantidade">
    
  </div>
  <label>Fornecedor</label>
<select class="form-select form-select-lg mb-3" name="fornecedor">
  <?php
 include 'conexao.php';
 $sql = "SELECT * FROM fornecedor ORDER BY fornecedor ASC";
 $buscar = mysqli_query($conexao,$sql);
 while($array = mysqli_fetch_array($buscar)){
	 $id_fornecedor = $array['id_fornecedor'];
	 $nome_fornecedor = $array['fornecedor'];
	 
	?> 
  
  <option><?php echo $nome_fornecedor ?></option>
  
 <?php } ?>
  
</select>
	<div style="text-align: right;">
	
	<button type="submit" id="botao" class="btn">Cadastrar</button>
	</div>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>