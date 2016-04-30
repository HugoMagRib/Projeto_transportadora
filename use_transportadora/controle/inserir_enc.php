<?php
session_start();
include("conexao.php");
$idencomenda = $_POST['idencomenda'];
$cliente = $_POST['cliente'];
$origem = $_POST['origem'];
$info = $_POST['info'];
$destino = $_POST['destino'];
$datapostagem = $_POST['datapostagem'];
$dataentrega = $_POST['dataentrega'];
$entregador = $_POST['entregador'];
$situacao = $_POST['situacao'];
$obs = $_POST['obs'];

if (empty($idencomenda)) {

$sql = "INSERT INTO encomenda (cliente, origem, info, destino,datapostagem, dataentrega, entregador, obs, situacao) VALUES('$cliente','$origem', '$info', '$destino','$datapostagem','$dataentrega','$entregador','$obs','$situacao')";

$query = mysqli_query($conn,$sql);
if ($query) {
  header("Location: ../cadastrar.php?msg=Mensagem enviada com sucesso");
}else {
  header("Location: ../cadastrar.php?msg=Erro ao enviar a mensagem. Tente novamete");
}

}else{

  $sql    = "UPDATE encomenda
            SET  cliente = '$cliente',
            origem = '$origem',
            info  = '$info',
            datapostagem = '$datapostagem'
            dataentrega = '$dataentrega'
            destino = '$destino'
            entregador = '$entregador'
            situacao = '$situacao'
            obs = '$obs'

            WHERE idencomenda = $idencomenda";
  $query  = mysqli_query($conn, $sql);

    if($query){
      header("Location: ../pesquisa.php?msg=Sua mensagem foi editada com sucesso!&tipo=ok");
    }else{
      header("Location: ../cadastrar.php?msg=ERRO ao tentar editar a mensagem. Tente novamente!&tipo=erro");
    }
}
 ?>
