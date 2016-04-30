<?php
session_start();
  if(empty($_SESSION['cliente_session'])){
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
      <li class="active"><a href="consultacliente.php"><h5>Nova consulta</h5></a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
          <div class="container-fluid">
                <div class="form-group">

                  <div class="col-sm-4">


<a href="controle/sair.php" class="btn btn-danger btn-sm">Sair</a>
                  </div>

              </div>
          </div>
    </ul>

  </div>
 </nav>
  <!-- Fim Barra De Navegacao -->


  <!-- MENU SECTION END-->
  <div class="content-wrapper">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h4 class="page-head-line">PESQUISA</h4>

              </div>

          </div>
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
          <div class="Compose-Message">
          <div class="panel-body">
            <div class="col-md-12">
              <?php
              $cliente = $_SESSION['cliente_session'];
              $sql   = "SELECT * FROM encomenda WHERE cliente = '$cliente' ";
              $query = mysqli_query($conn, $sql);

               ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de encomendas
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>cliente</th>
                                    <th>Origem</th>
                                    <th>Info</th>
                                    <th>Data De Postagem</th>
                                    <th>Data de entrega</th>
                                    <th>Destino</th>
                                    <th>Entregador</th>
                                    <th>Cliente</th>
                                    <th>Situação</th>
                                    <th>Obs</th>

                                  </tr>
                              </thead>

                              <tbody>

                                <?php
                                $i = 1;
                                while ($msg =mysqli_fetch_array($query)) {

                                   ?>
                                  <tr>
                                    <td><?=$i;?></td>
                                    <td><?php echo $msg['cliente']?></td>
                                    <td><?php echo $msg['origem']?></td>
                                    <td><?php echo $msg['info']?></td>
                                    <td><?php echo $msg['datapostagem']?></td>
                                    <td><?php echo $msg['dataentrega']?></td>
                                    <td><?php echo $msg['destino']?></td>
                                    <td><?php echo $msg['entregador']?></td>
                                    <td><?php echo $msg['situacao']?></td>
                                    <td><?php echo $msg['obs']?></td>
                                  </tr>
                                  <?php
                                   $i++;
                                   }
                                    ?>

                              </tbody>



                          </table>
                        </div>
                    </div>
                </div>
                <!--  End  Striped Rows Table  -->
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
