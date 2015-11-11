<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);


$query = "update inscritos set nombres='$nombre',apellidos='$apellido',cedula='$cedula',correo='$correo',direccion='$direccion', 
		Fecha_de_nacimiento='$fecha_nacimiento', Telefono='$telefono',Forma_de_pago='$forma_pago'
		where cedula='$cedula'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo '<script>alert("Registro actualizado")</script>';
echo "<script>location.href='listar.php'</script>";

?>
