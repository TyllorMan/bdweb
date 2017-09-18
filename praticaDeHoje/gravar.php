<!DOCTYPE html>
<html>
   <head>
      <title>Prática 02</title>
     <?php include '_cabecalho.php'; ?> 
      </head> 
     
   <body>
       <?php include '_navbar.php'; ?> 
		<?php
		 //Conexão com o bando de dados: host , usuario, senha, banco de dados
			$conn = new mysqli("localhost","root","","sistema_tres");  
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
 
		  //Método SHA - criptografa 
			$password = sha1($_POST['senha']);

			//executa a query
			$sql = "INSERT INTO usuario (nome, email, senha ) VALUES ('$_POST[nome]','$_POST[email]', '$password')";

			if ($conn->query($sql) === TRUE) {
				 echo "Usuario cadastrado com sucesso!";
			} else {
				 echo "Erro ao cadastrar usuario: " . $sql . "<br>" . $conn->error;
			}
		echo "<p><a href=\"index.php\">Home</a></p>";		
		$conn->close();
		?>
	</body>
</html>