<?php
session_start();
//conexão com o banco
include("conexao.php");

//Recebendo os valeres via POST
$entregador = $_POST['entregador'];


//Consultando no banco de dados
$sql = "SELECT * FROM encomenda WHERE entregador = '$entregador' ";
$query = mysqli_query($conn,$sql);

$qtde = mysqli_num_rows($query);

if($qtde > 0){
    $usuario = mysqli_fetch_array($query);

    /*
    tira o sql_num_rows
    troca o if por: if(!empty($usuario['id_usuario'])){

    }
    */

     $n = $_SESSION['entregador_session'] = $usuario['entregador'];

     header("Location: ../pesquisa2.php");

}else {
     header("Location: ../login.php?msg=Dados incorretos");
}
//Montando o arry
//$usuario = mysql_fetch_array($query);





/*definindo dados de autenticação
$email_acesso = "admin@admin.com";
$senha_acesso = "123456";


//comparadando valores
 if($email == $email_acesso){
    if($senha == $senha_acesso){
      header("Location: ../index.html");

    }else {
      header("Location: ../login.php?msg=E-mail incorreto");
}
 }else {
   header ("Location: ../login.php?=Senha incorreto");
 }

*/

 ?>
