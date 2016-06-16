<?php
session_start();
if (!isset ($_SESSION['cedula'])){
	echo "<script>alert('Necesitas identificarte para acceder al panel'); self.location='../index.php';</script>";
	}
require_once '../modelo/conex.php';
$funcion->conectar();
$sql="SELECT * FROM usuarios WHERE cedula=$_SESSION[cedula]";
$query=$funcion->consulta($sql);
$registro=$funcion->row($query);
?>
<html>
<header>
<meta name="description" content="Sistema de Geolocalizacion">
<meta name="keywords" content="Sistema, geolocalizacion, jornadas, alimentacion, gobierno, bolivariano, venezuela, pdval, mercal, mercalito, pdmercal"/>
<meta name="Revisit" content="1 day"/>
<meta name="Robots" content="All"/>
<link rel="stylesheet" type="text/css" href="../estilos.css" media="all" />
<title>Sistema de Geolocalizaci&oacute;n de Jornadas de Alimentaci&oacute;n</title>
</header>
<body>
<?php include '../header.php'; ?>
<center>
<table width="800" align="center" border="0" bgcolor="#FFFFFF">
<tr>
<td>
<center><h3>Panel de administraci&oacute;n</h3></center>
<div id="menu">
 <ul>	
	<li><a href="agregar.php">Agregar datos</a></li>
	<li><a href="modificar.php">Modificar datos</a></li>
	<li><a href="eliminar.php">Eliminar datos</a></li>
	<li><a href="../controlador/backup.php">Copia de seguridad</a></li>
	<li><a href="reporte.php">Reportes</a></li>
<?php 
if ($registro['perfil']=="admin"){
	echo "<li><a href='panelusuario.php'>Panel de Usuarios</a></li>";
}
$bdd=$funcion->cerrar();
 ?>  
 </ul>
</div><br><center><a href="../controlador/salir.php">Salir</a></center>
<br><br><br>

</td>
</tr>
</table></center>
</body>
</html>