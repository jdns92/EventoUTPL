<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_GET);

$query = "delete from inscritos where cedula='$cedula'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

echo '<script>alert("Registro eliminado")</script>';
echo "<script>location.href='listar.php'</script>";
?>
