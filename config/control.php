<?php //Clase CONTROL
class control{
var $conexion;
var $base;
var $consulta;
var $sql;
//Conectarse a la Base de Datos
public function conectar(){
$conexion=@mysql_connect('localhost','root','');
$base=mysql_select_db('invipasto',$conexion) or die('No se establecio la conexion '.mysql_error());
return $conexion;
}
//Validar Existencia de registros
public function valida_existencia($sql,$conexion){
$consulta=mysql_query($sql,$conexion);
$filas=mysql_num_rows($consulta);
return $filas;
}
// funcion buscar campo
public function busca_campo($sql,$conexion){
$consulta = @mysql_query($sql,$conexion);
$campos= @mysql_fetch_object($consulta);
return $campos;
}
//Funcion Procesar (Insertar, Modificar, Borrar)
public function procesar($sql,$conexion, $tipo){
$consulta=mysql_query($sql,$conexion);
if (($tipo == "Insertar") && ($consulta))
{
echo "
<script language=javascript>
alert('Datos insertados exitosamente')
</script>";
}
else if (($tipo == "Insertar") && (!$consulta))
{
echo "
<script language=javascript>
alert('Los datos no han podido ser insertados exitosamente. Vuelva a Intentarlo.')
</script>";
}
if (($tipo == "Modificar") && ($consulta))
{
echo "
<script language=javascript>
alert('Datos modificados exitosamente')
</script>";
}
else if (($tipo == "Modificar") && (!$consulta))
{
echo "
<script language=javascript>
alert('Los datos no han podido ser modificados exitosamente. Vuelva a Intentarlo.')
</script>";
}
if (($tipo == "Eliminar") && ($consulta))
{
echo "
<script language=javascript>
alert('Datos eliminados exitosamente')
</script>";
}
else if (($tipo == "Eliminar") && (!$consulta))
{
echo "
<script language=javascript>
alert('Los datos no han podido ser eliminados exitosamente. Vuelva a Intentarlo.')
</script>";
}
return $consulta;
}
//Funcion Ingresar Opcion
public function ingresa_opcion($sql,$conexion){
$consulta=mysql_query($sql,$conexion);
if (!($consulta))
{
echo "
<script language=javascript>
alert('Error no se ha podido registrar datos.')
</script>";
}
return $consulta;
}
//Funcion Ingresar Datos
public function ingresa_datos($sql,$conexion){
$consulta=mysql_query($sql,$conexion);
if (!($consulta))
{
echo "
<script language=javascript>
alert('Una Respuesta no se ha podido registrar.')
</script>";
}
return $consulta;
}
//Funci�n Conocer Datos Usuario
public function datos_usuario($sql,$conexion)
{
$consulta=mysql_query($sql,$conexion);
$campos=mysql_fetch_object($consulta);
return $campos;
}
//Funcion Consultar
public function consultar($sql,$conexion)
{
$consulta=mysql_query($sql,$conexion);
$campos=mysql_fetch_object($consulta);
$filas=mysql_num_rows($consulta);
if($filas==0)
{
echo "
<script language=javascript>
alert('No Existen Datos en la Consulta')
</script>";
return 0;
}
else
{
return $campos;
}
}
public function consultar_datos($sql, $campo, $conexion)
{ 
$consulta=mysql_query($sql,$conexion);

$filas=mysql_num_rows($consulta);
$a = array();
if($filas==0)
{
return 0;
}
else
{ $i =0;
while($campos=mysql_fetch_assoc($consulta))
{ $a[$i]=$campos[$campo]; $i++;
}
return $a;
}
}
function mostrar_datos_alerta($sql, $conexion, $img1)
{
$error = "no se pueden mostrar los datos". mysql_error(); $consulta = @mysql_query($sql, $conexion) or die ($error); $max = mysql_num_fields($consulta); $k = 0;
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
}
while($row = @mysql_fetch_array($consulta))
{ echo "<tr align='center'";
if($k % 2 == 0) echo "bgcolor='#FFFFFF'"; echo ">"; $j =0; for($i = 0; $i < $max; $i++)
{
$datos[$j][$campos[$i]] = $row[$campos[$i]]; $id[$i] = $row[$campos[0]]; echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; } echo "<td align='center'> <a href='actualizar.php?id=".$id[0]."'><img border=0 src=$img1 width='70' height='25'></a> </td>" ; $k++; $j++;
} 
}
//Funcion Crear Combo
function crear_combo($name, $sql)
{ $out = "<select name=$name size='1' class='normal' id=$name>";
$consulta = mysql_query($sql);
$id = mysql_field_name($consulta, 0); $nom = mysql_field_name($consulta, 1); while($array = mysql_fetch_array($consulta)){
$out .= "<option value=".$array[$id].">".htmlentities($array[$nom])."</option>\n"; } $out .= " </select> ";
return $out;
}
//funcion crear combo con seleccion
function crear_combo_select($name, $sql, $var)
{ $out = "<select name=$name size='1' class='normal' id=$name>";
$consulta = mysql_query($sql);
$id = mysql_field_name($consulta, 0); $nom = mysql_field_name($consulta, 1); while($array = mysql_fetch_array($consulta)){
$out .= "<option value=".$array[$id];
if($array[$id]==$var) { $out .= " selected='selected' "; } $out.=">".htmlentities($array[$nom])."</option>\n"; } $out .= " </select> ";
return $out;
} 
//funcion para crear id automatico
function crear_id($name, $sql)
{
$out = "<select name=$name size='1' class='normal' id=$name>";
$qry = @mysql_query($sql);
$id = mysql_field_name($qry, 0); $tmp = 0;
while($array = mysql_fetch_array($qry)){
if($tmp < $array[$id]){
$tmp = $array[$id];
}
}
$tmp +=1; $rec = $tmp;
$enu = "IncAutomatico: ".$rec;
$out.="<option value=".$rec.">".$enu."</option>\n"; $out .= " </select> "; return $out;
}
//funcion que muestra solo registros
function mostrar_registros($sql, $conexion)
{
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql, $conexion) or die ($error);
$max = mysql_num_fields($consulta) ;
echo "<table border=0 width=100% align=center <span class='subheader'>";
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
echo "<th>".$campos[$i]."</th>";
}
$k = 0;
while($row = @mysql_fetch_array($consulta))
{ echo "<tr align='center'";
if($k % 2 == 0) echo "bgcolor='#FFFFFF'"; echo ">"; $j =0; for($i = 0; $i < $max; $i++)
{
$datos[$j][$campos[$i]] = $row[$campos[$i]]; $id[$i] = $row[$campos[0]]; echo "<td align='justify'><span class='shadetabs'>". htmlentities($datos[$j][$campos[$i]])."</span></td>"; } $k++; $j++;
}
echo "</tr>";
echo "</table>";
}

public function mayor($sql,$conexion, $valor)
	{
		$consulta=mysql_query($sql,$conexion);
		
		$tmp=0;
		
		while($campos=mysql_fetch_assoc($consulta)){
		
		    $var=$campos[$valor];
			
		    if($var>$tmp)
			{
			    $tmp=$var;
			}					
		}	
		
		return $tmp;
	}
	
//Funcion Mostrar datos de la tabla con 1 opcion
function mostrar_datos_1opcion($sql, $conexion, $img1, $url)
{
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql, $conexion) or die ($error);
$max = mysql_num_fields($consulta) ;
echo "<table border=0 width=80% align=center class='subheader'>";
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
echo "<th>".$campos[$i]."</th>";
}
echo "<th colspan=2 rowspan=1> Opcion </th>"; echo "</tr>"; $k = 0;
while($row = @mysql_fetch_array($consulta))
{ echo "<tr align='center'";
if($k % 2 == 0) echo "bgcolor='#FFFFFF'"; echo ">"; $j =0; for($i = 0; $i < $max; $i++)
{
$datos[$j][$campos[$i]] = $row[$campos[$i]]; $id[$i] = $row[$campos[0]]; echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; } echo "<td align='center'> <a href='".$url."?id=".$id[0]."'><img border=0 src=$img1 width='70' height='25'></a> </td>"; $k++; $j++;
}
echo "</tr>";
echo "</table>";
}


//Funcion Mostrar datos de la tabla con opcion de modificar y eliminar
function mostrar_datos($sql, $conexion, $img1, $img2)
{
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql, $conexion) or die ($error);
$max = mysql_num_fields($consulta) ;
echo "<table border=0 width=80% align=center class='subheader'>";
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
echo "<th>".$campos[$i]."</th>";
}
echo "<th colspan=2 rowspan=1> Opcion </th>"; echo "</tr>"; $k = 0;
while($row = @mysql_fetch_array($consulta))
{ echo "<tr align='center'";
if($k % 2 == 0) echo "bgcolor='#FFFFFF'"; echo ">"; $j =0; for($i = 0; $i < $max; $i++)
{
$datos[$j][$campos[$i]] = $row[$campos[$i]]; $id[$i] = $row[$campos[0]]; echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; } echo "<td align='center'> <a href='actualizar.php?id=".$id[0]."'><img border=0 src=$img1 width='30' height='30'></a> </td>";
echo "<td align='center'> <a href='eliminar.php?id=".$id[0]."' > <img border=0 src=$img2 width='30' height='30'  /> </a> </td>"; $k++; $j++;
}
echo "</tr>";
echo "</table>";
}
//Funcion Mostrar datos de la tabla con 3 opciones
function mostrar_datos_perfil($sql, $conexion, $url, $img1, $img2, $img3)
{
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql, $conexion) or die ($error);
$max = mysql_num_fields($consulta) ;
echo "<table border=0 width=80% align=center class='subheader'>";
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
echo "<th>".$campos[$i]."</th>";
}
echo "<th colspan=3 rowspan=1> Opcion </th>"; echo "</tr>"; $k = 0;
while($row = @mysql_fetch_array($consulta))
{ echo "<tr align='center'";
if($k % 2 == 0) echo "bgcolor='#FFFFFF'"; echo ">"; $j =0; for($i = 0; $i < $max; $i++)
{
$datos[$j][$campos[$i]] = $row[$campos[$i]]; $id[$i] = $row[$campos[0]]; echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; } echo "<td align='center'> <a href='actualizar.php?id=".$id[0]."'><img border=0 src=$img1 width='70' height='25'></a> </td>";
echo "<td align='center'> <a href=javascript:eliminar('".$id[0]."') > <img border=0 src=$img2 width='70' height='25'  /> </a> </td>"; 
echo "<td align='center'> <a href='".$url."?id=".$id[0]."'><img border=0 src=$img3 width='97' height='25'></a> </td>";
$k++; $j++;
}
echo "</tr>";
echo "</table>";
}
//Funcion Mostrar datos de la tabla con 3 opciones
function mostrar_datos_tercero($sql, $conexion, $url, $img1, $img2, $img3)
{
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql, $conexion) or die ($error);
$max = mysql_num_fields($consulta) ;
echo "<table border=0 width=80% align=center class='subheader'>";
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
echo "<th>".$campos[$i]."</th>";
}
echo "<th colspan=3 rowspan=1> Opcion </th>"; echo "</tr>"; $k = 0;
while($row = @mysql_fetch_array($consulta))
{ echo "<tr align='center'";
if($k % 2 == 0) echo "bgcolor='#FFFFFF'"; echo ">"; $j =0; for($i = 0; $i < $max; $i++)
{
$datos[$j][$campos[$i]] = $row[$campos[$i]]; $id[$i] = $row[$campos[0]]; echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; } echo "<td align='center'> <a href='".$url."?id=".$id[0]."'><img border=0 src=$img1 width='70' height='25'></a> </td>"; 
echo "<td align='center'> <a href=javascript:eliminar('".$id[0]."') > <img border=0 src=$img2 width='70' height='25'  /> </a> </td>"; echo "<td align='center'> <a href=javascript:ventanaSecundaria('imagen.php?id=".$id[0]."')><img border=0 src=$img3 width='70' height='25'></a> </td>";
$k++; $j++;
}
echo "</tr>";
echo "</table>";
}

//Funcion Crear lista de checkeo
function crear_lista_checkeo($sql, $conexion, $arreglo)
{ 
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql, $conexion) or die ($error);
$max = mysql_num_fields($consulta) ;
echo "<table border=0 width=35% align=center class='subheader'>";
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
echo "<th>".$campos[$i]."</th>";
}
echo "<th colspan=1 rowspan=1> Seleccionar </th>"; echo "</tr>"; $k = 0; $cont = 0;
while($row = @mysql_fetch_array($consulta))
{ echo "<tr align='center'"; $propiedad = "";

if(isset($arreglo[$cont])){
if($arreglo[$cont] == "1" ){ $propiedad = "checked='checked' ";   } }   $cont++;  
if($k % 2 == 0) echo "bgcolor='#FFFFFF'"; echo ">"; $j =0; for($i = 0; $i < $max; $i++)
{
$datos[$j][$campos[$i]] = $row[$campos[$i]]; $id[$i] = $row[$campos[0]]; echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; } 
echo "<td align='center'> <input type='hidden' name ='id".$cont."' value='".$id[0]."' /> <input type='hidden' name ='cont' value='".$cont."' />  <input type='checkbox' name='chk".$cont."' value='1' $propiedad /> </td>"; 
 $k++; $j++;
}
echo "</tr>";
echo "</table>";

}
}
//onclick='eliminar(".$id[0].")' // id de tipo enteros, evento  dentro de la etiqueta <img>
?>