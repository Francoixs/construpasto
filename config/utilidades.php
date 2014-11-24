<?php  
function redireccionar($url)
{
	echo "<script languaje = javascript> location.href='$url'; </script>";
}

function mensaje($comentario)
{
	echo "<script languaje= javascript> alert('$comentario'); </script>";
}
?>