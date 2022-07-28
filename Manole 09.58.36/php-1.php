<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Manole</title>
</head>
<body>
    
<div>
<?php

$login = $_POST['nomecompleto'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('mamp','nome_de_usuario','senha');
$db = mysql_select_db('nome_do_banco_de_dados');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>
</div>

</body>
</html>