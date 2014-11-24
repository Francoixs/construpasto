<?php
session_start();
include('config/control.php');
include('config/utilidades.php');
$con = new control();
$conexion = $con->conectar();

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
if(user.value=="")
{
alert("Escriba su UserName!...");
return false;
}
else if(passwd.value=="")
{
alert("Escriba su Password!...");
return false;
}
else
return true
}
}	
</script>
</head>

<body>
<table  border="0" align="center"  id="table2" >
  <tbody>
   <tr>
 <td colspan="2" align="center" > <img src="images/INVIPASTO_logo.jpg"  /> </td>
 </tr>

     <tr>
  <td align="center" class="shadetabs" colspan="2" > ACCEDER AL SISTEMA </td> 
  </tbody>
</table>
<form action="procesar.php" method="post" name="form1" id="form1" onSubmit="return checar();">
  <table width="326" border="0" align="center" class="subheader">
    
	<tr> <td width="134"><span class="shadetabs">User:</span></td>
	<td> <input name="user" type="text" id="user" /> </td>
	
	
	</tr>
	<tr>
    
     <td width="134"><span class="shadetabs">Password:</span></td>
      <td width="176" align="left"><span class="Estilo1">       
        <input name="passwd" type="password" id="passwd" />       
      </span></td>
      
    </tr>
       
    <tr>
      <td colspan="4" align="center"><span class="Estilo1">
       
          <input name="Submit" type="submit" class="button"  value="Acceder"/>
      <input name="req" type="hidden" id="req" value="logeo" /></td>
    </tr>
  </table>
</form>
<p align="center"> <a href="listar.php" >Consultar Estado de Solicitud</a> </p>

</body>
</html>
<?php
	
?>
