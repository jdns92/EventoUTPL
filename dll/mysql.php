<?php
require("config.php");

$link = mysql_connect($db_host,$db_usr,$db_pass)
    or die('No se pudo conectar: ' . mysql_error());

if ($link)
{
	$db=mysql_select_db($db_name,$link);
}
else
{
	echo "error en base de datos";	
}
?>
