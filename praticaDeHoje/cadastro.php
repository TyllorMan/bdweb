<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro </title>
     <?php include '_cabecalho.php'; ?> 
      </head> 
     
   <body>
       <?php include '_navbar.php'; ?> 
				Página de Cadastro
		</h1>
		<form action="gravar.php" method="post">
			Nome: <input type="text" name="nome" /> </br>
		  e-mail: <input type="text" name="email" /> </br>
		  Senha: <input type="password" name="senha" /></br>
			<input type="submit" value="Cadastrar"/>
		</form>
	</body>
</html>