<?php
session_start();
include('config/control.php');
include('config/utilidades.php');
$con = new control();
$conexion = $con->conectar();

$sql="select * from solicitud ";
$consulta=mysql_query($sql, $conexion);


$cant=$con->mayor($sql, $conexion, "id");

$cant++; 

if ($cant<10)
{ 

	$cod="000"; 
	$cod_= ("$cod$cant"); 
} 
else{ 

if ($cant<99)
{ 
	$cod="00"; 
	$cod_= ("$cod$cant"); 
} 
else if($cant<999)  {
	
	$cod="0"; 
	$cod_= ("$cod$cant");
	
	}

} 



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	
<style type="text/css">
<!--
.Estilo1 {font-family: Broadway}
.Estilo2 {font-family: Broadway; color: #FFFFFF; }
body,td,th {
	color: #FFFFFF;
}
-->
</style>
<script language="javascript">
function checar()
{
with (document.forms['form1'])
{	
if(nom.value=="")
{
alert("Escriba su Nombre!...");
return false;
}
else if(ced.value=="")
{
alert("Escriba su Cedula!...");
return false;
}
else if(nit.value=="")
{
alert("Escriba el nit de la Asociacion o Constructora!...");
return false;
}
else if (txt_nom.value=="")
{
alert("Escriba el Nombre de la Asociacion o Constructora!...");
return false;
}
else
return true
}
}	
</script>
</head>

<body>
<table border="0" align="center">
 <tr>
 <td colspan="2" align="center" > <img src="images/INVIPASTO_logo.jpg"  /> </td>
 </tr>

 <tr>
  <td colspan="2" align="center" class="shadetabs"> INGRESAR SOLICITUD </td> 
</tr>
</table>
<form action="procesar.php" method="post" name="form1" id="form1" onSubmit="return checar();">
  <table width="326" border="0" align="center" class="subheader">
    <tr>
     <td width="134"><span class="shadetabs">Consecutivo:</span></td>
     <td colspan="2" align="left"><input name="txt_cod" value="<? echo $cod_ ;?>" readonly="readonly"  ></td>
    </tr>
	<tr> <td width="134"><span class="shadetabs">Nombre del solicitante:</span></td>
	<td> <input name="nom" type="text" id="nom" /> </td>
	</td>
	<td width="134"><span class="shadetabs">Cedula del solicitante:</span></td>
	<td> <input name="ced" type="text" id="ced" />  </td>
	</td>
	</tr>
	<tr>
      <td width="134"><span class="shadetabs">Nit asociasion o contructora:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="nit" type="text" id="nit" />       
      </span></td>
     <td width="134"><span class="shadetabs">Nombre de la asociacion o contructora:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="txt_nom" type="text" id="txt_nom" />       
      </span></td>
      
    </tr>
     <tr>
     
    
      <td width="134"><span class="shadetabs">Direccion asociacion o contructora:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="txt_dir" type="text" id="txt_dir" />       
      </span></td>
	  
	  <td width="134"><span class="shadetabs">Email:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="txt_em" type="text" id="txt_em" />       
      </span></td>
		  
    </tr>
	
       
    <tr>
      <td colspan="4" align="center"><span class="Estilo1">
        <input name="limpiar" type="reset" class="button" id="limpiar" value="limpiar" />
          <input name="Submit" type="submit" class="button"  value="Agregar"/>
      <input name="req" type="hidden" id="req" value="add" /></td>
    </tr>
  </table>
</form>
<p align="center"> <a href="listar.php" >Consultar Estado de Solicitud</a> <br>
 <a href="login.php" >Administracion</a> 
</p>

</body>
</html>
<?php
	
?>
