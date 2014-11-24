<?php
session_start();
include('config/control.php');
include('config/utilidades.php');
$con = new control();
$conexion = $con->conectar();

$id = $_GET['id'];
$sql="select * from solicitud Where id = '$id'";
//$consulta=mysql_query($sql, $conexion);
$datos_consulta= $con->consultar($sql,$conexion);

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
alert("Escriba su Nombre!");
return false;
}
else if(ced.value=="")
{
alert("Escriba su Cedula!");
return false;
}
else if(nit.value=="")
{
alert("Escriba el nit de la Asociacion o Constructora!");
return false;
}
else if (txt_nom.value=="")
{
alert("Escriba el Nombre de la Asociacion o Constructora!");
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
  <td colspan="2" align="center" class="shadetabs"> Modificar SOLICITUD </td> 
</tr>
</table>
<form action="procesar.php" method="post" name="form1" id="form1" onSubmit="return checar();">
  <table width="326" border="0" align="center" class="subheader">
   
	<tr> <td width="134"><span class="shadetabs">Nombre del solicitante:</span></td>
	<td> <input name="nom" type="text" id="nom" value="<?php echo "$datos_consulta->nombre"; ?>" /> </td>
	</td>
	<td width="134"><span class="shadetabs">Cedula del solicitante:</span></td>
	<td> <input name="ced" type="text" id="ced" value="<?php echo "$datos_consulta->cedula"; ?>" />  </td>
	</td>
	</tr>
	<tr>
      <td width="134"><span class="shadetabs">Nit asociasion o contructora:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="nit" type="text" id="nit" value="<?php echo "$datos_consulta->nit"; ?>" />       
      </span></td>
     <td width="134"><span class="shadetabs">Nombre de la asociacion o contructora:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="txt_nom" type="text" id="txt_nom" value="<?php echo "$datos_consulta->nom_ac"; ?>" />       
      </span></td>
      
    </tr>
     <tr>
     
    
      <td width="134"><span class="shadetabs">Direccion asociacion o contructora:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="txt_dir" type="text" id="txt_dir" value="<?php echo "$datos_consulta->direccion"; ?>" />       
      </span></td>
	  
	  <td width="134"><span class="shadetabs">Email:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="txt_em" type="text" id="txt_em"  value="<?php echo "$datos_consulta->email"; ?>" />       
      </span></td>
		  
    </tr>
	
 <tr>
     <td width="134"><span class="shadetabs">Estado:</span></td>
     <td colspan="2" align="left">  <select name="cmb_est">
                 <option value="EN ESTUDIO">EN ESTUDIO</option>
                 <option value="APROBADO">APROBADO</option>
             </select>   </td>
    </tr>
       
    <tr>
      <td colspan="4" align="center"><span class="Estilo1">
        <input name="limpiar" type="reset" class="button" id="limpiar" value="limpiar" />
          <input name="Submit" type="submit" class="button"  value="Modificar"/>
		  <input name="txt_cod" value="<? echo $id ;?>"  type="hidden"  />
      <input name="req" type="hidden" id="req" value="modify" /></td>
    </tr>
  </table>
</form>


</body>
</html>
<?php
	
?>
