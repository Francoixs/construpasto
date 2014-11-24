<?php
session_start();
include('config/control.php');
include('config/utilidades.php');
$con = new control();
$conexion = $con->conectar();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<?php 

$sql = "SELECT * FROM  solicitud ";

if(isset($_POST['op']))
{
	$cat = $_POST['nom'];
	if($cat != ""){ $sql .= " Where id like '%' '$cat' '%' "; }
	
	$ced = $_POST['txt_ced'];
	if($ced != ""){ $sql .= " AND cedula = '$ced' "; }
	
}
$sql .=" ORDER BY id DESC";
?>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>


<link rel="stylesheet" href="images/style.css" type="text/css" />
	
  
  <script language="Javascript"> 
function eliminar(valor)
{ 
 var respuesta=confirm("Esta seguro que desea eliminar el registro?"); 
 if (respuesta) { 
     location.href="eliminar.php?id=" + valor;
 }                                   
} 
function ventanaSecundaria (URL){ 
   window.open(URL,"ventana11","width=600,height=400,scrollbars=NO")   
} 
 
 function checar()
{
with (document.forms['form1'])
{	
if(nom.value=="")
{
alert("Escriba el No de Solicitud!...");
return false;
}
else if(txt_ced.value=="")
{
alert("Escriba su Cedula!...");
return false;
}
else
return true
}
}	

  </script>
  
  <style type="text/css">
<!--
body {
	background-image: url();
}

#table5 {	color: #006;
}
-->
  </style>
</head><body>
<table border="0" align="center"  id="table2" >

  <tbody>
   <tr>
 <td colspan="2" align="center" > <img src="images/INVIPASTO_logo.jpg"  /> </td>
 </tr>

     <tr>
  <td align="center" colspan="2" class="shadetabs" > CONSULTAR ESTADO DE SOLLCITUDES </td> 
  </tbody>
</table>

<div align="center">
<form id="form1" name="form1" method="post" action="listar.php"  onSubmit="return checar();">
<table  align="center" class="subheader" width =400px > 
<tr> <th class="shadetabs" colspan="2" align="center"> Opciones de Busqueda </th> </tr>
<tr> <td>
  <span class="shadetabs">Busqueda por No de Solictud: </span> </td> <td align="left" >
    <input type="text" name="nom" id="nom" />
   </td>
	</tr>
			 
		 <tr>
	 <td align="right" >  <span class="shadetabs">Por Cedula: </span> </td>
      <td  align="left"><span class="Estilo1"><input name="txt_ced" type="text" id="txt_ced"   />
   </td>
		 </tr> 
	<tr>
	<td colspan="2">
<label>
  <input name="op" type="submit" class="button" id="button" value="Buscar" />
</label> </td> </tr>
</table>
</form>
<p>
</p>  <?php  
$img1 = "images/modificar.png";
$img2 = "images/eliminar.png";
if(isset($_POST['op']))
{
$con->mostrar_registros($sql, $conexion); 
}
?>
<br>

</div>
</body></html>
<?php

?>