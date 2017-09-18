<!DOCTYPE html>
<html>
   <head>
      <title>Prática 04 - Gravar</title>
      <?php include '../_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '../_navbar.php';?>
		<?php
		 
		  

			//executa a query
			$sql = "INSERT INTO papel (nome, descricao ) VALUES ('$_POST[nome]','$_POST[descricao]')";

			if ($conn->query($sql) === TRUE) {
				 echo "Papel cadastrado com sucesso!";
			} else {
				 echo "Erro ao cadastrar papel: " . $sql . "<br>" . $conn->error;
			}
		echo "<p><a href=\"../index.php\">Home</a></p>";		
		$conn->close();
		?>
	</body>
</html>