<?php date_default_timezone_set('America/Sao_Paulo')?>

<?php require_once ("cabecario.php"); ?>
  
<?php require_once ("menu.php"); ?>

<?php  

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$rota = str_replace("/","",$dados_url['path']);



$rotasValidas = array( "contato","empresa","produtos","servicos","home");

if( in_array( $rota , $rotasValidas)):

require_once('includes/'.$rota.".php");

elseif ( $rota == ""): 

require_once('includes/home.php');


else:
require_once('includes/erro.php');
endif;




 ?>


<?php require_once ("footer.php"); ?>
        
