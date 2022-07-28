<?php

    if(isset($_POST['submit']))
    {
         //   print_r('Nome: ' . $_POST['nome']);
         //   print_r('<br>');
         //   print_r('Email: ' . $_POST['email']);
         //   print_r('<br>');
         //  print_r('Senha: ' . $_POST['senha']);
      
        include_once('config.php'); 

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha']; 

        $result = mysqli_query($conexao, "INSERT INTO Livros(nome,email,senha) VALUES ('$nome','$email','$senha')");
 }
?>



<!DOCTYPE html> 
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagem/livros.jpeg"type="image/x-icon">
    <link rel="stylesheet" href="css/livroinicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" >
    <link rel="shortcut icon" href=""type="image/x-icon">
    <title>Realize seu Cadastro</title>
</head>
<body>
    
        <div class="container">
        <div class="row">
        <div class="col-md-12">



        <fieldset>
  
     
  
        <form action="livrocadastro.php" method="POST">
    <h1>Realize seu cadastro</h1>

            <div>
            <label id="campo"  for="nome"> Nome: </label>
            <input type="text" id='nome' name='nome'class="form-control" placeholder="Ex.: Maria da Silva" required> </div>

            <br>

            <div>
            <label id="campo" for='Email'>Email:</label>
            <input type="text" id='email' name='email' class="form-control "placeholder="abcd1234@gmail.com:" required></div>

            <br>

            <div>
            <label id="campo"  for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Informe sua senha" required>
            </div>

 
<br>


 <input class="inputSubmit" type="submit" name="submit" id="submit">

<!--<button id="cadastrar" type="submit" value="Enviar">Cadastrar</button> -->
   
  

        </fieldset>

        </form>
     
        </div></div></div>


</body>
</html>