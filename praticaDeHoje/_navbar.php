<?php
session_start();
?>
<nav id="nav1" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BD Web Prat.04</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="listar.php">Listar</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <?php
         if(isset($_GET["logout"])) {
            session_destroy(); 
            header('Location: index.php');
         }
          if(isset($_SESSION["logado"]) && $_SESSION["logado"]==true) {
              echo "<li><a href='#'>Bem vindo!</a> </li>";
              echo "<li><a href='index.php?logout=true'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
          }
          else {
             echo "<li><a href='cadastro.php'><span class='glyphicon glyphicon-user'></span> Cadastro</a></li>";
             echo "<li><a href='index.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
          }
       ?>
     
    </ul>
  </div>
</nav>