<?php
include('loginconexao.php');

    if(empty($_POST['email']) || empty($_POST['senha']))

    $email = $_POST['email'];
 
    
    $query = $conn->prepare("SELECT * FROM manoletab WHERE email = :email ");
        

       $query->BindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();

        $userCont = $query->fetch();
        if($userCont == 1)
        {
          $response['status'] = '200';
          $response['message'] = 'Deu certo!';
          $response['Usuario'] = $userCont;
          
          
        }
        echo json_encode($userCont);
?>    