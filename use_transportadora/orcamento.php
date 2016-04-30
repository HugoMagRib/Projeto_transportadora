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
        <li><a href="cadastrar.php"><h5>Cadastrar encomenda</h5></a></li>
        <li  class="active"><a href="orcamento.php"><h5>Orçamentos</h5></a></li>
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


          <?php
         if (!empty($_GET['msg'])){
      ?>
             <div class="alert alert-danger" role="alert">
                <?php echo $_GET['msg']; ?>
              </div>
              <?php
            }
               ?>
            <div class="compose-message">
            <div class="panel-body">


                    <?php
                   $sql   = "SELECT * FROM orcamento";
                   $query = mysqli_query($conn, $sql);

                     ?>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Orçamento
                      </div>
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead>
                                      <tr>
                                          <th>#</th>

                                          <th>email de contato</th>
                                          <th>quantidade objetos</th>
                                          <th>cidade da coleta</th>
                                          <th>Destino</th>
                                          <th>tipo de entrega</th>
                                          <th>Obs</th
                                      </tr>
                                  </thead>

                                  <tbody>

                                    <?php
                                    $i = 1;
                                    while ($msg =mysqli_fetch_array($query)) {

                                       ?>
                                      <tr>
                                          <td><?=$i;?></td>
                                          <td><?php echo $msg['email']?></td>
                                          <td><?php echo $msg['quantidade']?></td>
                                          <td><?php echo $msg['coleta']?></td>
                                          <td><?php echo $msg['destino']?></td>
                                          <td><?php echo $msg['tipoentrega']?></td>
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





    <!-- Rodapé -->
    <footer>
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="container">
        <div class="navbar-text pull-left">
          <p>2016 Use Transportadora.</p>
        </div>
      </div>
    </div>
</footer>
    <!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
