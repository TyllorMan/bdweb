<!DOCTYPE html>
<html>
   <head>
      <title>Prática 05 - Cadastro</title>
      <?php include '../_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '../_navbar.php';?>
		<h1>
				Página de Cadastro
		</h1>
		<form action="gravar.php" method="post">
			Nome: <input type="text" class="form-control" name="nome" /> </br>
		  e-mail: <input type="text" class="form-control" name="email" /> </br>
		  Senha: <input type="password" class="form-control" name="senha" /></br>
			<input type="submit" class="btn btn-default" value="Cadastrar"/>
		</form>
	</body>
</html>