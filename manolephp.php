 <?php
include_once ("conexao.php");

  $nome = $_POST['nome'];
          $cpf = $_POST['cpf'];
          $telefone = $_POST['telefone'];
          $voucher = $_POST['voucher'];  
          $email = $_POST['email'];
          $senha = $_POST['senha'];
      

          

          $query = $conn-> prepare ("INSERT INTO manoletab (nome, cpf, telefone, voucher, email, senha) 
    VALUES (:nome, :cpf, :telefone, :voucher, :email, :senha )");
  

          $query->bindValue(':nome', $nome, PDO::PARAM_STR);
         $query->bindValue(':cpf', $cpf, PDO::PARAM_STR);
          $query->bindValue(':telefone', $telefone, PDO::PARAM_STR);
          $query->bindValue(':voucher', $voucher, PDO::PARAM_STR);
          $query->bindValue(':email', $email, PDO::PARAM_STR);
          $query->bindValue(':senha', $senha, PDO::PARAM_STR);
          $query->execute();

          $userCont = $query->fetch();
    
          if($userCont){
            $response['status'] = '200';
            $response['message'] = 'Deu certo!';
            $response['nome'] = $nome;
            $response['cpf'] = $cpf;
            
            $response['erro'] = $query;
          }
          echo json_encode($response);

?>    