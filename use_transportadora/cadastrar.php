<?php
session_start();
if (empty($_SESSION['nome_session'])) {
    header("Location: login.php?msg=<strong>Ops!</strong> É necessário autenticar-se.");
}
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
        <li><a href="pesquisa.php"><h5>Pesquisa</h5></a></li>
        <li class="active"><a href="cadastrar.php"><h5>Cadastrar encomenda</h5></a></li>
        <li><a href="orcamento.php"><h5>Orçamentos</h5></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
            <div class="container-fluid">
                  <div class="form-group">

                    <div class="col-sm-4">


                        <?php
                          if(!empty($_SESSION['nome_session'])){
                            echo $_SESSION['nome_session'];
                          }
                        ?>
  <a href="controle/sair.php" class="btn btn-danger btn-sm">Sair</a>
                    </div>

                </div>
            </div>
      </ul>

    </div>
   </nav>
    <!-- Fim Barra De Navegacao -->

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
              <form class="form-horizontal" action="controle/inserir_enc.php" method="post">
                <label>Cliente : </label>
                <input type="text" name="cliente" required="required" class="form-control" />
                <label>Origem : </label>
                <input type="text" name="origem" required="required" class="form-control" />
                <label>Info :  </label>
                <textarea rows="5" name="info" required="required" class="form-control"></textarea>
                <label>Data de Postagem :  </label>
                <input type="date" name="datapostagem" required="required" class="form-control" />
                <label>Data de Entrega :  </label>
                <input type="date" name="dataentrega" required="required" class="form-control" />
                <label>destino : </label>
                <input type="text" name="destino" required="required" class="form-control" />
                <label>Entregador : </label>
                <input type="text" name="entregador" required="required" class="form-control" />

                <label>Situação : </label>
                <select name="situacao">
                <option value="Postado">Postado</option>
                <option value="Em Transito">Em Transito</option>
                <option value="Entregue">Entregue</option>

                </select>
              </br>
                <label>Obs :  </label>
                <textarea rows="5" name="obs" class="form-control"></textarea>
                <hr />
              <button input="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-tags"></span>Enviar</button>
              </form>
            </div>

        </div>
             </div>
        </div>
    </div>





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
