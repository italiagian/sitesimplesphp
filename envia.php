<?php


if ($_POST['inputNome'] || $_POST['inputEmail'] || $_POST['inputAssunto'] || $_POST['areaMensagem']) {    

echo'<div class="panel panel-success">';
  echo '<div class="panel-heading ">';
   echo ' <h3 class="panel-title">Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h3>';
  echo '</div>';
echo'  <div class="panel-body">';
    

echo('  <strong>Seu Nome:</strong>' . " ".  $_POST['inputNome']) . "<BR />";
            echo('  <strong>Seu E-mail:</strong>' . " ".  $_POST['inputEmail']) . "<BR />";
             echo('  <strong>Assunto:</strong>' . " ".  $_POST['inputAssunto']) . "<BR />";
            echo('  <strong>Mensagem:</strong>' . " ".  $_POST['areaMensagem']);


       
    } 


    
 echo ' </div>';
echo '</div> ';   
       

				
    
?>