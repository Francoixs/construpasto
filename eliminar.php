<?php session_start();
include('config/control.php');
include('config/utilidades.php');
$control = new control();
$conexion = $control->conectar();

$id = $_GET['id'];
	$sql = "DELETE FROM solicitud WHERE id = '$id'";
	$datos_consulta = $control->procesar($sql,$conexion, "Eliminar");
	redireccionar('versolicitudes.php');		

?>
