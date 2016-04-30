<?php

include("conexao.php");
$email = $_POST['email'];
$quantidade = $_POST['quantidade'];
$coleta = $_POST['coleta'];
$destino = $_POST['destino'];
$tipoentrega = $_POST['tipoentrega'];
$obs = $_POST['obs'];


$sql = "INSERT INTO orcamento (email, quantidade, coleta, destino,tipoentrega, obs) VALUES('$email','$quantidade', '$coleta', '$destino','$tipoentrega','$obs')";

$query = mysqli_query($conn,$sql);
if ($query) {
  header("Location: ../cadorcamento.php?msg=Orçamento enviado com sucesso! Em breve retornaremos o contato.");
}else {
  header("Location: ../cadorcamento.php?msg=Erro ao enviar a mensagem. Tente novamete");
}
