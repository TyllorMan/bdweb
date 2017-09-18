<!DOCTYPE html>
<html>
   <head>
      <title>Prática 02</title>
     <?php include '_cabecalho.php'; ?> 
      </head> 
     
   <body>
       <?php include '_navbar.php'; ?> 
      <h1>
        Sistema TRÊS
     </h1>
       <?php
          if(isset($_SESSION["logado"]))
              echo $_SESSION["logado"];
       ?>
       <form action="sucesso.php" method="post">
          E-mail:<br>
          <input type="text" name="email" value=""><br>
          Senha:<br>
          <input type="password" name="senha" value=""><br><br>
          <input type="submit" value="Entrar">
        </form>
        <p>
          
        <p>
            <a href="cadastro.php">Cadastrar</a>
        </p>
        <p>
          <a href="listar.php">Listar Usuários</a>
        </p>
        <p>
          <a href="../index.html">Home</a>
        </p>
   </body>
   
</html>

