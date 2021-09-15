<?php

$host = 'localhost';
$userdb = 'root';
$senhadb = "";
$banco = 'manole'; 

try{

  $conn = new PDO('mysql:host='.$host.';dbname='.$banco.'', $userdb, $senhadb);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
}

catch(Exception $e) {  
    $error = $e;      
    $response['status'] = '400';
    $response['message'] = 'Erro na solitação, tente mais tarde!';
   } 



?>
