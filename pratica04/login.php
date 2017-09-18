<!DOCTYPE html>
<html>
   <head>
      <title>Prática 04 - Login</title>
      <?php include '_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '_navbar.php';?>
     
     
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
               <h2> Login </h2>
               <form action="sucesso.php" method="post">

                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                        <input type="email" class="form-control" id="email" name="email" placeholder="email">
                       </div>


                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" id="pwd" name="senha" placeholder="senha">
                        </div>

                  <button type="submit" class="btn btn-default">Entrar</button>
                </form> 
          </div>
          <div class="col-sm-4">
          </div>
        </div>
     </div>
   </body>
   
</html>

