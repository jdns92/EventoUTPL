<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);


$query = "insert into inscritos values('$nombre','$apellido','$correo','$fecha_nacimiento','$cedula','$direccion','$telefono','$forma_pago')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

echo '<script>alert("Registro guardado")</script>';
echo "<script>location.href='listar.php'</script>";

?>
