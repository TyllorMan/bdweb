<!DOCTYPE html>
<html>
   <head>
      <title>Prática 05 - Remover</title>
      <?php include '../_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '../_navbar.php';?>
      	<?php
            	
                $query = "DELETE FROM usuario_papel WHERE id=".$_GET['id']; 
                if ($conn->query($query) === TRUE) {
                    echo "<p>Usuário-Papel removido com sucesso!</p>";
                } else {
                    echo "Erro removendo usuário-papel: " . $conn->error;
                }
                echo "<a href='listar.php'>Listar Usuários-Papeis</a>";
                $conn->close();
        ?>
      
    	</body>
</html>