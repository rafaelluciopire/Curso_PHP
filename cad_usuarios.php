<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/> <!--Constante para medir o tamanho da tela e deixar o site reponsívo-->
	<link rel="stylesheet" href="css/stilo.css" /><!--Chama a folha de estilos-->
	<title>Cadastro de Usuários</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</head>
<body>
<div class="container" id="cadastro"><!--Div que controla os cadastros-->
<h4 id="titulo">CADASTRO DE USUÁRIOS</h4>
<form action="_insert_usuarios.php" method="post">
	<div class="form-group">
		<label>Nome do Usuário</label>
		<input type="text" name="nome_usuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
	</div>
	<div class="form-group">
		<label>E-mail</label>
		<input type="email" name="email_usuario" class="form-control" required autocomplete="off" placeholder="Endereço de E-email">
	</div>
	<div class="form-group">
		<label>Senha</label>
		<input id="txtSenha" type="password" name="senha_usuario" class="form-control" required autocomplete="off" placeholder="Digite sua Senha">
	</div>
	<div class="form-group">
		<label>Confirme sua senha</label>
		<input type="password" name="senha_usuario2" class="form-control" required autocomplete="off" 
		placeholder="Confirmação de senha" oninput="validaSenha(this)">
	</div>
	<div class="form-group">
		<label>Nivel de Acesso</label>
		<select name="nivel_usuario" class="form-control">
			<option value="1">Administrador</option>
			<option value="2">Funcionário</option>
		</select>
		
		<div class="botao" id="botao_entrar">
		<button type="submit" class="btn btn-sm btn-success">Gravar</button>
		</div>
		<center>
		<div class="botao_voltar" id="botao_voltar">
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar ao inicio</a>
		</div>
		<center>
	</div>
</div>
</form>
</div><!--Div que controla os cadastros-->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>

  function validaSenha (input)
  {
  			if (input.value != document.getElementById('txtSenha').value)
  		{
  			input.setCustomValidity('Senhas digitadas não conferem');
  		}
  	else
  		{
  			input.setCustomValidity('');
  		}

  }
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/3384123510?text=Olá Rafael, não consigo acessar o sistema de ponto!" 
          onmouseover="this.style.color='#292351'"
          onmouseout="this.style.color='white'"
        style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;
          background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;
            font-size:30px;box-shadow: 3px 5px 4px black;
          z-index:1000;" target="_blank"> 
          <i style="margin-top:16px" class="fa fa-whatsapp"></i>
        </a>
</body>
</html>