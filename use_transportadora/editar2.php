<?php
session_start();
  if(empty($_SESSION['entregador_session'])){
    header("Location: login.php?msg=<strong>Ops!</strong> É necessário autenticar-se.");
  }
  if(!empty($_GET['idencomenda'])){

    include("controle/conexao.php");

    $idencomenda = $_GET['idencomenda'];

    $sql    = "SELECT * FROM encomenda WHERE idencomenda = $idencomenda";
    $query  = mysqli_query($conn, $sql);

    $encomenda  = mysqli_fetch_array($query);

  }
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
        <li><a href="pesquisa2.php"><h5>Pesquisa</h5></a></li>

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
            if(!empty($_GET['msg'])){
              if($_GET['tipo'] == "ok"){
          ?>
              <div class="alert alert-success" role="alert">
                <?php echo $_GET['msg']; ?>
              </div>
          <?php
              }else{
                ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $_GET['msg']; ?>
                </div>
                <?php
              }
            }
          ?>
          <div class="panel-body">
            <form action="controle/inserir_enc.php" method="post">
              <input type="hidden" name="idencomenda" value="<?=$encomenda['idencomenda']; ?>" />
              <label>Cliente : </label>
              <input type="text" name="cliente" value="<?php if(!empty($idencomenda)) { echo $encomenda['cliente']; } ?>" required="required" class="form-control" />
              <label>Origem : </label>
              <input type="text" name="origem"  value="<?php if(!empty($idencomenda)) { echo $encomenda['origem']; } ?>" required="required" class="form-control" />
              <label>Info :  </label>
              <textarea rows="5" name="info"  required="required" class="form-control"><?php if(!empty($idencomenda)) { echo $encomenda['info']; } ?></textarea>
              <label>Data de Postagem :  </label>
              <input type="date" name="datapostagem" value="<?php if(!empty($idencomenda)) { echo $encomenda['datapostagem']; } ?>" required="required" class="form-control" />
              <label>Data de Entrega :  </label>
              <input type="date" name="dataentrega" value="<?php if(!empty($idencomenda)) { echo $encomenda['dataentrega']; } ?>" required="required" class="form-control" />
              <label>Destino : </label>
              <input type="text" name="destino" value="<?php if(!empty($idencomenda)) { echo $encomenda['destino']; } ?>" required="required" class="form-control" />
              <label>Entregador : </label>
              <input type="text" name="entregador" value="<?php if(!empty($idencomenda)) { echo $encomenda['entregador']; } ?>" required="required" class="form-control" />
              <label>Situação : </label>
              <select name="situacao" >
              <option value="Postado">Postado</option>
              <option value="Em Transito">Em Transito</option>
              <option value="Entregue">Entregue</option>
</br>
              </select>
              <label>Obs :  </label>
              <textarea rows="5" name="obs"  class="form-control"><?php if(!empty($idencomenda)) { echo $encomenda['info']; } ?> </textarea>
              <hr />
            <button input="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-tags"></span>Enviar</button>
            </form>
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
