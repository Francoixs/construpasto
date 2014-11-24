<?php session_start();
include('config/control.php');
include('config/utilidades.php');
$con = new control();
$conexion = $con->conectar();


switch($_REQUEST['req'])
{
	case "add":	
			 
		$id=$_POST['txt_cod'];
		$nom = $_POST['nom'];
		$ced = $_POST['ced'];
		$nit = $_POST['nit'];
		$txt_nom=$_POST['txt_nom'];	
		$txt_dir=$_POST['txt_dir'];
		$txt_em=$_POST['txt_em'];

		$sql= "INSERT into solicitud VALUES ('$id','$nom','$ced','$nit','$txt_nom','$txt_dir','$txt_em', 'EN ESTUDIO')";
		$resultado=$con->procesar($sql,$conexion,"Insertar");
		if($resultado)
		{
		    $msg = "consultar si su solicitud fue aprovada en el transcurso de tres dias y acercarse a la oficina de Invipasto de Inspección y Vigilancia a retirar su registro -- No solicitud: "+$id;
			mensaje($msg);
			redireccionar('insertar.php');
		}
				
		exit();
	
	break;
	
	case "logeo":
	
	    $user = $_POST['user'];
		$pass = $_POST['passwd'];
		$_SESSION['session'] = $user;
		$sql= "Select * from admin where user = '$user' and passwd = '$pass'";
		$rows = $con->valida_existencia($sql,$conexion);
		
		if($rows > 0)
		{
			redireccionar('versolicitudes.php');
		}
		else
		{    
			mensaje("Error de Autenticacion");
			redireccionar('login.php');
		}
		
		exit();
	
	break;	

    case "modify":
	
		$estado = $_POST['cmb_est'];
		$id=$_POST['txt_cod'];
		$nom = $_POST['nom'];
		$ced = $_POST['ced'];
		$nit = $_POST['nit'];
		$txt_nom=$_POST['txt_nom'];	
		$txt_dir=$_POST['txt_dir'];
		$txt_em=$_POST['txt_em'];
		
		$sql= "Update  solicitud set nombre = '$nom', cedula = '$ced', nit = '$nit', nom_ac = '$txt_nom', direccion =  '$txt_dir',  email =  '$txt_em', estado = '$estado' where id = '$id' ";
		$resultado=$con->procesar($sql,$conexion,"Modificar");
		if($resultado)
		{
		   // $msg = "Actualizacion Correcta";
			//mensaje($msg);
			redireccionar('versolicitudes.php');
		}		
	
		exit();
		
	break;
}
?>