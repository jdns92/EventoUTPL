<?php
include("../dll/config.php");
include("../dll/mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $site_name; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="../table.css" rel="stylesheet" type="text/css" media="all" />
<link href="../form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?=$url_site?>icons/style.css">

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="../images/pic00.jpg" alt="" />
			<h1><a href="#">Evento UTPL</a></h1>
			<span>Design by <a href="http://templated.co" rel="nofollow">JDNaranjo</a></span>
		</div>
		<div id="menu"> 
			<ul>				
                <li> <a href="<?=$url_site?>index.php" accesskey="1" title="">Registro</a></li>
				<li class="current_page_item"><a href=""<?=$url_site?>includes/listar.php"" accesskey="2" title="">Consulta de inscritos</a></li>			
			</ul>
		</div>
	</div>
	<div id="main" >				       
	<h1><strong>Inscritos al evento</strong></h1>
		<?php
		$query = "select i.nombres, i.apellidos, i.correo, i.Fecha_de_nacimiento, i.cedula, i.Direccion, i.Telefono, i.Forma_de_pago from inscritos i";
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		echo "<table class='table'>";
		echo "<tr>";	
			echo "<th><strong>NOMBRES</strong></th>";				
			echo "<th><strong>APELLIDOS</strong></th>";
			echo "<th><strong>CORREO</strong></th>";			
			echo "<th><strong>FECHA DE NACIMIENTO</strong></th>";	
			echo "<th><strong>CEDULA</strong></th>";		
			echo "<th><strong>DIRECCION</strong></th>";
			echo "<th><strong>TELEFONO</strong></th>";
			echo "<th><strong>FORMA DE PAGO</strong></th>";
			
			
		echo "</tr>";
		while ($line = mysql_fetch_row($result)){ 
		    echo "<tr>";
		        echo "<td>$line[0]</td>";
		        echo "<td>$line[1]</td>";
		        echo "<td>$line[2]</td>";
		        echo "<td>$line[3]</td>";
		        echo "<td>$line[4]</td>";
		        echo "<td>$line[5]</td>";
		        echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
		        echo "<td><a href='actualizar.php?cedula=$line[4]' class='actualizar'><span class='icon-pencil'></span></a></td>";
		        echo "<td><a href='borrar.php?cedula=$line[4]' class='borrar'><span class='icon-trashcan'></span></a></td>";
		    echo "</tr>";
		}
		echo "</table>";
		?>                        			
	</div>
</div>
</body>
</html>
