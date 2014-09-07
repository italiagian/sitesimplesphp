<?php 

try {

	$conexao = new \PDO ("mysql:host=localhost;dbname=pdo", "root", "root")
	
} catch (\PDOException $e) {

	die( "Erro codigo:" .$e->getCode(). ":" .$e->getMessage());
	
}

$sql = "select * from clientes";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$clientes = $stmt->fetchall(PDO::FETCH_ASSOC);


foreach ($clientes as $cliente ) {
	# code...

echo $cliente ['nome'].  " - "  .$cliente['email'] . "<br>" ;
}

 ?>