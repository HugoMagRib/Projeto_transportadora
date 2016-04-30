<?php

include("controle/conexao.php");

?>
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
      <li class="active"><a href="index.php"><h5>HOME</h5></a></li>
      <li><a href="use.html"><h5>EMPRESA</h5></a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Funcionário</a></li>
    </ul>
  </div>
 </nav>
  <!-- Fim Barra De Navegacao -->

  <div class="container"><!-- Inicio COntaine -->

    <div class="row">

        <div class="col-md-6">

            <hr />
             <div class="Compose-Message">
        <div class="panel panel-success">
          <?php
         if (!empty($_GET['msg'])){
      ?>
             <div class="alert alert-danger" role="alert">
                <?php echo $_GET['msg']; ?>
              </div>
              <?php
            }
               ?>

            <div class="panel-body">
              <form action="controle/inserir_orc.php" method="post">
                <label>Email de contato : </label>
                <input type="email" name="email" required="required" class="form-control" />
                <label>Quantidade de objetos : </label></br>
                <select name="quantidade">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></br>
                <label>cidade da coleta : </label>
                <input type="text" name="coleta" required="required" class="form-control" />
                <label>destino : </label>
                <input type="text" name="destino" required="required" class="form-control" />

                <label>Tipo de entrega : </label></br>
                <select name="tipoentrega">
                <option value="caro">Caro e rapido</option>
                <option value="medio">Nem caro nem barato</option>
                <option value="barato">barato e lento</option>
              </select> </br>
                <label>Obs :  </label>
                <textarea rows="5" name="obs" class="form-control"></textarea>
                <hr />
              <button input="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-tags"></span>Enviar</button>
              </form>
            </div>







        </div>
             </div>
        </div>
    </div

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
