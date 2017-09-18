<html>

<head>
	<title>Listar Usuários</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8" />
</head>

<body>
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