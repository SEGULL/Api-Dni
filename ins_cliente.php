<?php 
include 'conexion.php';
error_reporting(0);
$dni = $con->real_escape_string(htmlentities($_POST['dni']));

$url = "https://dniruc.apisperu.com/api/v1/dni/".$dni."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsZWphbmRyby5jYW5haHVpcmUuaGlsYXJpQGdtYWlsLmNvbSJ9.7K-XaAUtQUZlouz1k3kRA9nRr-LRrCXjxhCY1PXaUa4";
$json = file_get_contents($url); 
$datos = json_decode($json);
$dni_val = $datos->{'dni'};
$nombres_cli = $datos->{'nombres'};
if ($dni_val) {
	
	$ins_cliente = $con->query("INSERT INTO clientes VALUES('','$dni_val','$nombres_cli')");
   
    header("Location:alertas.php?carpeta=principal&archivo=ind&mensaje=Buen el Dni ingresado es Correcto&tipomensaje=bien");

}else{
	echo "Su dni no es valido";
	  header("Location:alertas.php?carpeta=principal&archivo=ind&mensaje=Su Dni no existe&tipomensaje=error");
}



?>