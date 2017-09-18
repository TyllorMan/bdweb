<?php
  session_start();
	$conn = new mysqli("localhost","root","","sistema_cinco");   
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<nav class='navbar navbar-inverse'>";
  echo "  <div class='container-fluid'>";
  echo "    <div class='navbar-header'>";
	echo "		  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>";
  echo "        <span class='icon-bar'></span>";
  echo "        <span class='icon-bar'></span>";
  echo "        <span class='icon-bar'></span>";                      
  echo "      </button>";
  echo "      <a class='navbar-brand' href='index.php'>SISTEMA CINCO</a>";
  echo "    </div>";
  echo "    <ul class='nav navbar-nav'>";
  echo "     <li class='active'><a href='/bdweb/pratica05/index.php'>Home</a></li>";

  echo "		 <li class='dropdown'>";
  echo "      <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Usuario <span class='caret'></span></a>";
  echo "       <ul class='dropdown-menu'>";
  echo "          <li><a href='/bdweb/pratica05/usuario/listar.php'>Listar</a></li>";
  echo "          <li><a href='/bdweb/pratica05/usuario/cadastro.php'>Cadastrar</a></li>";
  echo "       </ul>";
  echo "      </a> ";
  echo "     </li> ";

  echo "		 <li class='dropdown'>";
  echo "      <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Papel <span class='caret'></span></a>";
  echo "       <ul class='dropdown-menu'>";
  echo "          <li><a href='/bdweb/pratica05/papel/listar.php'>Listar</a></li>";
  echo "          <li><a href='/bdweb/pratica05/papel/cadastro.php'>Cadastrar</a></li>";
  echo "       </ul>";
  echo "      </a> ";
  echo "     </li> ";

  echo "		 <li class='dropdown'>";
  echo "      <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Usuário_Papel <span class='caret'></span></a>";
  echo "       <ul class='dropdown-menu'>";
  echo "          <li><a href='/bdweb/pratica05/usuario_papel/listar.php'>Listar</a></li>";
  echo "          <li><a href='/bdweb/pratica05/usuario_papel/cadastro.php'>Cadastrar</a></li>";
  echo "       </ul>";
  echo "      </a> ";
  echo "     </li> ";

  echo "   <li><a href='../../index.html'>Práticas</a></li>";
  echo "   <form action='/bdweb/pratica05/usuario/listar.php' class='navbar-form navbar-left'>";
  echo "    <div class='form-group'>";
  echo "      <input type='text' name='search' class='form-control' placeholder='Procurar'>";
  echo "    </div>";
  echo "    <button type='submit' class='btn btn-default'>OK</button>";
  echo "  </form>";
  echo "    </ul><ul class='nav navbar-nav navbar-right'>";
   if( isset( $_GET["logout"]) ) {
      $_SESSION["logged"]=false;
     }
  if( isset( $_SESSION["logged"]) && $_SESSION["logged"]==true)  {
      echo "<li><a data-toggle='tooltip' title='".implode(",",$_SESSION["user.roles"])."' href='#'>".$_SESSION["user.email"]."</a></li>";
      echo "<li><a href='/bdweb/pratica05/index.php?logout=true'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
   } else { 
      echo "<li><a href='/bdweb/pratica05/usuario/cadastro.php'><span class='glyphicon glyphicon-user'></span> Cadastrar</a></li>";
      echo "<li><a href='/bdweb/pratica05/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
   }
  echo "   </ul>";
  echo "  </div>";
  echo "</nav>";
?>