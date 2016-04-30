<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Transportadora</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <link href="assets/css/style.css" rel="stylesheet">
     <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>

  <body>

  <!-- Inicio Barra De Navegacao -->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      <img src="assets/img/use.png" class="img-responsive" alt="Responsive image">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="use">Empresa</a></li>

    </ul>
  </div>
 </nav>
  <!-- Fim Barra De Navegacao -->


  <div class="row">
     <div class="col-md-6">
       <?php
      if (!empty($_GET['msg'])){
   ?>
          <div class="alert alert-danger" role="alert">
             <?php echo $_GET['msg']; ?>
           </div>
           <?php
         }
            ?>
       <a  class="thumnail"></br>
       <h3 style="text-align:center;">Login</h3>
       <form class="form-horizontal" role="form" name="login" method="post" action="controle/autenticar.php">
         <div class="form-group">
           <label class="control-label col-sm-4" for="nome">Funcionario:</label>
           <div class="col-sm-4">
             <input type="name" class="form-control" name="nome" required>
           </div>
         </div>

         <div class="form-group">
           <label class="control-label col-sm-4" for="senha">Senha:</label>
           <div class="col-sm-4">
             <input type="password" class="form-control" name="senha" required>
           </div>
         </div>
         <div class="form-group">
           <div class="col-sm-offset-4 col-sm-6">
             <button type="submit" class="btn btn-success">Entrar</button>
           </div>
         </div>
       </form>

     </div>
   </br>
     <!--formulario do entregador-->
     <div class="col-md-6">
       <h3 style="text-align:left">entregador</h3>
     <form name="login" method="post" action="controle/autenticar2.php">
       <div class="form-group">
         <div class="col-sm-4">
           <input style="align:left;" type="text" class="form-control" name="entregador" required>
         </div>
       </div>
       <div class="form-group">
         <div class="col-sm-3">
           <button type="submit" class="btn btn-success">Entrar</button>
         </div>
     </form>
     </div>
     </div>
</div>

 </div><!-- Final COntaine -->



    <!-- Rodapé -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="container">
        <div class="navbar-text pull-left">
          <p>2016 Use Transportadora.</p>
        </div>
      </div>
    </div>

    <!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
