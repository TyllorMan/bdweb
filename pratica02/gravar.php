<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		 //Conexão com o bando de dados: host , usuario, senha, banco de dados
			$conn = new mysqli("localhost","root","","sistema_dois");  
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$password = sha1($_POST['senha']);
			//$password = $_POST['senha'];
			//executa a query
			$sql = "INSERT INTO usuario (nome, email, senha ) VALUES ('$_POST[nome]','$_POST[email]', '$password')";

			if ($conn->query($sql) === TRUE) {
				 echo "Usuario cadastrado com sucesso!";
			} else {
				 echo "Erro ao cadastrar usuario: " . $sql . "<br>" . $conn->error;
			}
		echo "<p><a href=\"index.html\">Home</a></p>";		
		$conn->close();
		?>
	</body>
</html>