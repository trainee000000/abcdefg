<?php
 
 session_start();
 include("conexao.php");

 $nome = mysqli_real_escape_string($conexão, $_POST['nome']);
 $email = mysqli_real_escape_string($conexão, $_POST['email']);
 $senha = mysqli_real_escape_string($conexão, $_POST['senha']);

 $sql = "select count(*)"


        
           

?>    