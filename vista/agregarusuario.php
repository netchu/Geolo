<?php
session_start();
if (!isset ($_SESSION['cedula'])){
	echo "<script>alert('Necesitas identificarte para acceder al panel'); self.location='index.php';</script>";
	}
?>
<html>
<header>
<meta name="description" content="Sistema de Geolocalizacion">
<meta name="keywords" content="Sistema, geolocalizacion, jornadas, alimentacion, gobierno, bolivariano, venezuela, pdval, mercal, mercalito, pdmercal"/>
<meta name="Revisit" content="1 day"/>
<meta name="Robots" content="All"/>
<link rel="stylesheet" type="text/css" href="estilos.css" media="all" />
<title>Sistema de Geolocalizaci&oacute;n de Jornadas de Alimentaci&oacute;n</title>
</header>
<body>
<?php include '../header.php'; ?>
<center>
<table width="800" align="center" border="0" bgcolor="#FFFFFF">
<tr>
<td>
<hr color="#666" width="600" />
<center><h3>Panel de usuarios - Agregar un nuevo usuario</h3></center>
<hr color="#666" width="600" />
<p align="right">
	<a href="panelusuario.php" class="menus">Volver al panel de usuarios</a><br>
	<a href="paneladmin.php" class="menus">Volver al panel de administraci&oacute;n</a>
</p>
<form method="post" action="../controlador/aggusuario.php">
<table align="center" border="0">
<tr><td>Apellido:</td><td><input type="text" name="apellido" id="apellido" size="14"></td></tr>
<tr><td>C&eacute;dula:</td><td><input type="text" name="cedula" id="cedula" size="14"></td></tr>
<tr><td>Contrase&ntilde;a:</td><td><input type="password" name="clave" id="clave" size="14"></td></tr>
<tr><td>Nombre de usuario:</td><td><input type="text" name="usuario" id="usuario" size="14"></td></tr>
<tr><td>Perfil:</td><td><input type="text" name="perfil" id="perfil" size="14"></td></tr>
<tr align="right"><td><input type="submit" name="agregar" id="agregar" value="Agregar" size="14"></td></tr>
</table>
</form>
</td>
</tr>
</table></center>
</body>
</html>