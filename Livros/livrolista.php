<?php
        session_start();
        print_r($_SESSION);
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header ('Location: iniciologin.php');
        }
            $logado = $_SESSION['email'];
        
?>


<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagem/livros.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/listalivro.css">
    <link rel="stylesheet" href="css/livroinicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista de Livros</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">


        <a href="iniciologin.php"> <button id="" type="button" class="">Sair</button></a>
       
  
<form>
<fieldset>

             <div class="titulo"><b>Lista de Livros</b> </div>  
             <br>      


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>

            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>


            <table>
                <tr>
                    <td>
                        <img src="imagem/capa.jpeg" alt="">
                    </td>
                    <td><p><b>Por dois mil anos - Um estudante judeu na Rômenia antissemita dos anos 1930</b></p>
                <p>O romance Por dois mil anos, de tintas autobiográficas e em registro de diário, tem como protagonista um jovem judeu cujo nome jamais é mencionado, registrando seu contato com diferentes facetas da sociedade romena ao longo dos anos, naquilo que chama de “um tempo de espasmo” – o período entreguerras que testemunhou a ascensão do fascismo e colocou em xeque a intelectualidade europeia. Da universidade, onde tentava passar despercebido pelos grupos de agressores antissemitas, à vida profissional adulta, o protagonista convive e conversa com reacionários, revolucionários, fanáticos e libertinos, sem jamais se identificar com nenhum grupo particular. Mas isso não o impede de perceber que nem amizades de longa data nem um esforço de assimilação o protegem de ser visto como um pária.</p>
              
               <p class="acessar"> <input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Já li <br>
               <p><input type = "checkbox" name = "listMotivos" value = "<%=motivos.getCodMotivo() %>"> Ainda não li <br>
               <p><a href="https://www.manole.com.br/por-dois-mil-anos-1-edicao/p">Adquiquir</a></p> </td>
               
                 </tr>
            </table>

            <br>








</fieldset>
</form>

       </div>
    </div>
</div>   
</body>
</html>