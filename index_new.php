<?php
include ("dll/config.php");
include ("dll/mysql.php");
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
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="form.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
        <div id="logo">
            <img src="images/pic00.jpg" alt="" />
            <h1><a href="#">Evento UTPL</a></h1>
            <span>Design by <a href="http://templated.co" rel="nofollow">JDNaranjo</a></span>
        </div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="<?=$url_site?>index.php" accesskey="1" title="">Registro</a></li>
				<li><a href="<?=$url_site?>includes/listar.php" accesskey="2" title="">Consulta de inscritos</a></li>			
			</ul>
		</div>
	</div>
	<div id="main">				        
        <form id="contact-form" action="includes/guardar_datos.php" method="post" accept-charset="utf-8" name="ContactForm">
            <fieldset>
              <legend>Registro para el evento</legend>
              <dl>
                  <dd><label for="nombre">NOMBRES</label></dd>
                  <dt><input type="text" class="form-control" id="nombre" name="nombre" required></dt>
                  <dd><label for="apellido">APELLIDOS</label></dd>
                  <dt><input type="text" class="form-control" id="apellido" name="apellido" required></dt>
                  <dd><label for="correo">CORREO</label></dd>
                  <dt><input type="email" class="form-control" id="correo" name="correo" required></dt>
                  <dd><label for="fecha_nacimiento">FECHA DE NACIMIENTO</label></dd>
                  <dt><input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="0000-00-00" required></dt>               
                  <dd><label for="cedula">CÉDULA</label></dd>
                  <dt><input type="text" class="form-control" id="cedula" name="cedula" required></dt>                
                  <dd><label for="direccion">DIRECCIÓN</label></dd>
                  <dt><input type="text" class="form-control" id="direccion" name="direccion" ></dt>                    
                  <dd><label for="telefono">TELÉFONO</label></dd>
                  <dt><input type="text" class="form-control" id="telefono" name="telefono" required></dt>                 
                  <dd><label for="forma_pago">FORMA DE PAGO</label></dd>
                  <dt><select name="forma_pago" id="forma_pago" required>
                              <option value="EFECTIVO">EFECTIVO</option>
                              <option value="CHEQUE">CHEQUE</option>
                              <option value="TARJETA">TARJETA DE CREDITO</option>
                    </select></dt>                       
                                              
                  <dd class="p-container"></dd>
                  <dt><input type="submit" name="go" id="go" value="Guardar"></dt>                  
              </dl>
            </fieldset>
        </form>     			
	</div>
</div>
</body>
</html>
