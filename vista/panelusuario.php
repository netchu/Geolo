<?php
session_start();
if (!isset ($_SESSION['cedula'])){
	echo "<script>alert('Necesitas identificarte para acceder al panel'); self.location='index.php';</script>";
	}
require_once '../modelo/conex.php';
$funcion->conectar();
?>
<html>
<header>
<meta name="description" content="Sistema de Geolocalizacion">
<meta name="keywords" content="Sistema, geolocalizacion, jornadas, alimentacion, gobierno, bolivariano, venezuela, pdval, mercal, mercalito, pdmercal"/>
<meta name="Revisit" content="1 day"/>
<meta name="Robots" content="All"/>
<link rel="stylesheet" type="text/css" href="estilos.css" media="all" />
<title>Sistema de Geolocalizaci&oacute;n de Jornadas de Alimentaci&oacute;n</title>
<script language="JavaScript">
function sieliminar(cedula){
    if (confirm('¿Estas seguro de eliminar este usuario?')){
		window.open("../controlador/eliusuario.php?ci="+cedula,"EliminarUsuario");
	    window.close(this);
    }
}
</script> 
</header>
<body>
<?php include '../header.php'; ?>
<center>
<table width="800" align="center" border="0" bgcolor="#FFFFFF">
<tr>
<td>
<hr color="#666" width="600" />
<center><h3>Panel de usuarios</h3></center>
<hr color="#666" width="600" />
<p align="right">
	<a href="paneladmin.php" class="menus">Volver al panel de administraci&oacute;n</a>
</p>
<br><p align="left">
	<a href="agregarusuario.php" class="menus">Agregar nuevo usuario</a>
</p>
<table width="100%" align="center" border="1" cellpadding="10">
<tr align="left"><th>Nombre de usuario</th><th>Apellido</th><th>Cedula</th><th>Perfil</th><th>Opciones</th></tr>
<?php
$sql="SELECT * FROM usuarios ORDER BY apellido DESC";
$query=$funcion->consulta($sql);
$registro=$funcion->row($query);
do {
	echo "<tr>";
	echo "<td>".$registro['nombre']."</td>";
	
	echo "<td>".$registro['apellido']."</td>";
	echo "<td>".$registro['cedula']."</td>";
	echo "<td>".$registro['perfil']."</td>";
	echo "<td><a href='modiusuario.php?ci=".$registro['cedula']."'>Editar</a><br><a href='' onclick='sieliminar(".$registro['cedula'].");'> Eliminar </a><br></td>";
	echo "</tr>";
} while ($registro=mysql_fetch_assoc($query));
?>
</table>
</td>
</tr>
</table></center>
</body>
</html>