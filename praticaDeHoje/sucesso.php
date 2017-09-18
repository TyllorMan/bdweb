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
      //consulta SQL 
      $query = "SELECT * FROM usuario";
      //resultado da consulta
      $result = $conn->query($query);
    
      $logado = false;
      //Dados retornados do formulário - página anterior(index.html - login)
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if(sha1($senha)==$row["senha"] && $email==$row["email"]) {
            $logado=true;
            $_SESSION["logado"]=true;
            break;
          }
        }
      }
      if($logado==true) {
          echo "Bem vindo, ".$email;
          header('Location: index.php');
      } else {
        echo "Senha ou Email inexistente";
      }
      $conn->close();
    ?>
    <p><a href="index.html">Home</a></p>
  </body>
</html>