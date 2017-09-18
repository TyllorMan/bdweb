<html>

<head>
	<title>Listar Usuários</title>
	 <?php include '_cabecalho.php'; ?> 
</head>

<body>
	 <?php include '_navbar.php'; ?>   
	<div class="container">
		<h2>Usuários Cadastrados</h2>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Password</h1>
				</tr>
			</thead>
			<tbody>

				<?php
            	$conn = new mysqli("localhost",
											 "root",
											 "",
											 "sistema_tres");  
            	if ($conn->connect_error) {
               	die("Connection failed: " . $conn->connect_error);
            	}
   	          $query = "SELECT * FROM usuario";
            	$result = $conn->query($query);
   	          if ($result->num_rows > 0) {
               	// output data of each row
               	while($row = $result->fetch_assoc()) {
									
                 	echo "<tr> <td>" . $row["id"]. "</td> <td  contenteditable='true'>".$row["nome"]."</td> <td>" . $row["email"]. "</td><td>".$row["senha"]."</td></tr>";
               	}
            	} else {
               	echo "0 Resultados";
            	}
            	$conn->close();
   	 ?>

			</tbody>
		</table>
	</div>
	<p><a href="index.html">Home</a></p>
</body>

</html>