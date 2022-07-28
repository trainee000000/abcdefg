<?php
    $host = 'localhost';
    $userdb = 'root';
    $senhadb = "";
    $banco = 'manole2'; 


    try{
      $conn = new PDO('mysql:host='.$host.';port=8889;dbname='.$banco.'', $userdb, $senhadb);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch (Exception $e) {  
        $error = $e;      
        $response['status'] = '400';
        $response['message'] = 'Erro na solitação, tente mais tarde!';      
           }


        
           

?>    




