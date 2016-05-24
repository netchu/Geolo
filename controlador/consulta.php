<html>
<header>
<meta name="description" content="Sistema de Geolocalizacion">
<meta name="keywords" content="Sistema, geolocalizacion, jornadas, alimentacion, gobierno, bolivariano, venezuela, pdval, mercal, mercalito, pdmercal"/>
<meta name="Revisit" content="1 day"/>
<meta name="Robots" content="All"/>
<title>Sistema de Geolocalizaci&oacute;n de Jornadas de Alimentaci&oacute;n</title>
</header>
<body>
<?php include '../header.php'; ?>
<center><table border="0">
<tr>
	<td>    
		<form name="formconsul" method="post">
	<table border=1>
		<tr>
		<td>FECHA</td><td>DIRECCION</td><td>TELEFONO</td><td>RUBROS</td>
		</tr>
		<?php
		$funcion->conectar();
		$SQL="SELECT jornadas.fechajornada, jornadas.direccion, jornadas.tlfcontacto, jornadas.descripcion, jornadas.estatus FROM jornadas WHERE jornadas.numparroquia=".$_POST['parro']."";
		$query=$funcion->consulta($SQL);
		$registro=$funcion->row($query);
		do {
			if($registro['estatus']==1){
		echo "<tr>";
			echo "<td>".$registro['fechajornada']."</td><td>".$registro['direccion']."</td><td>".$registro['tlfcontacto']."</td><td>".$registro['descripcion']."</td>";}
		} while ($registro=mysql_fetch_assoc($query));
		?>
		
		</table>
		  </td>
        </tr>
		<tr>
		<td><a href='../vista/consultajornada.php'>Volver a seleccion de parroquia</a></td>
		</tr>
      </table>
    </form></td></tr>
</tr>
</table></center>