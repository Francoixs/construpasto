<?php
session_start();
include('config/control.php');

$con = new control();
$conexion=$con->conectar();

if(isset($_SESSION['session']))
{
	unset($_SESSION['session']);
	echo "
	<script language=javascript>
		alert('Ha salido exitosamente del Sistema. Tenga buen dia bambares.')
		location.href='index.php';
	</script>";
}
session_destroy();
?>