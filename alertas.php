<?php 
$carpeta = htmlentities($_GET['carpeta']);
switch ($carpeta) {
	case 'principal':
		$car = "";
		break;
	
	default:
		# code...
		break;
}
$archivo = htmlentities($_GET['archivo']);
switch ($archivo) {
	case 'ind':
		$ar = "index.php";
		break;
	
	default:
		# code...
		break;
}
$mensaje = htmlentities($_GET['mensaje']);
$tipomensaje = htmlentities($_GET['tipomensaje']);
if ($tipomensaje=="bien") {
	$tiposms = "success";
}else{
	$tiposms = "error";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ALERTA!!!!!!!!!!!!!</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="	  crossorigin="anonymous"></script>
</head>
<body>
 <script>
		Swal.fire({
			title : 'AVISO!!!',
			text : "<?php echo $mensaje; ?>",
			icon : '<?php echo $tiposms; ?>',//success error
			showConfirmButton: false,
			timer: 5000
		}).then(function(){
			location.href='index.php';
		});


 </script>

</body>
</html>