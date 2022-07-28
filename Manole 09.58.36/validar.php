<?php


if(isset($_POST['submit'])){

include ('');
  
    $nome     = $_POST['nome'];
    $cpf      = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $voucher  = $_POST['voucher'];
    $email    = $_POST['email'];
    $senha    = $_POST['senha'];

    $conexao = mysqli_connect( $localhost, $userdb, $senhadb, $banco);

    mysqli_select_db($conexao, `$banco`);
      $sql= "INSERT INTO usuarios(nome, cpf, telefone, voucher, email, senha) 
        VALUES ('$nome', '$cpf', '$telefone', '$voucher', '$email', '$senha', )";
}

    $conn = locolhost8889_connect ($nome, $cpf, $telefone, $voucher, $email, $senha);

    if (!$conn) {
      die("Connection failed: " . locolhost8889_connect_error());}
      echo "Connected successfully";
      locolhost8889_close($conn); 
      
      
?>