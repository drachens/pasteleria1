<?php
	$keyCurrent = $_GET["prod"];
	require '/var/www/html/vendor/autoload.php';
	$uri ="mongodb://localhost";
	$client = new MongoDB\Client($uri);
	$questProd = array('id_cat' => $keyCurrent);
	$db_Productos = $client->piñufle->Productos->find($questProd);
	$detalleProd = array();
	foreach ($db_Productos as $key) {
		$id = $key['_id']->__toString();
		$id_cat = $key['id_cat'];
		$nombre = $key['name'];
		$precio = $key['precio']*1000;
		$imagen = $key['imagen'];
		$Producto = array("id"=>$id,"id_cat"=>$id_cat,"nombre"=>$nombre,"precio"=>$precio,"imagen"=>$imagen);

		$detalleProd[] = $Producto;
	}
	echo json_encode($detalleProd);

?>
