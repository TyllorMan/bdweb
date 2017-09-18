<!DOCTYPE html>
<html>
   <head>
      <title>Prática 05 - Index</title>
      <?php include '_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '_navbar.php';?>
     
     <div class="container"  style="width:50%;">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img style="width:100%;" src="https://upload.wikimedia.org/wikipedia/commons/6/66/Pra%C3%A7a-Rodolfo-Fernandes-Mossor%C3%B3.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img style="width:100%;" src="http://www.praiasdenatal.com.br/wp-content/uploads/2014/08/Natal-RN1.jpg?x41575" alt="Chicago">
          </div>

          <div class="item">
            <img  style="width:100%;" src="http://www.parnamirim.rn.gov.br/img/foto/galeria/barreira-inferno2.jpg" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
     </div>
     
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
             <?php 
                  if(isset($_SESSION["logged"]) && $_SESSION["logged"]) 
                      echo "Bem vindo! ".$_SESSION["user.name"];
              ?>
          </div>
          <div class="col-sm-4">
               
          </div>
          <div class="col-sm-4">
          
          </div>
        </div>
     </div>
   </body>
   
</html>

