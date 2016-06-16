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
		<form name="Formagregar" method="post">
		  <table  border="1" align="right">
			<tr>
			  <td colspan="2"><div align="center">ELIMINAR DATOS </div></td>
			</tr>
			<tr>
			  <td><span>Dato a eliminar</span></td>
			  <td>
				<select name="tabla" onchange=Formagregar.submit()>
					<option value=""></option>
					<option value="parroquia">Parroquia</option>
					<option value="jornadas">Jornadas</option>
					<option value="jornalero">Jornalero</option>
				</td>
				</form>
			</tr>
			<?php
				if ($_POST['tabla']=="parroquia"){
					echo "<form method=post name=elimparro action='../controlador/eliparroquia.php'>";
					echo "<tr><td><span>Parroquia</span></td><td>";
					$SQL="SELECT numparroquia, nombreparro, estatus FROM parroquia";
					$funcion->conectar();
					$query=$funcion->consulta($SQL);
					$registro=$funcion->row($query);
					echo "<select name='parro'>";
					echo "<option value=''></option>";
					do {
					echo "<option value='".$registro['numparroquia']."'>".$registro['nombreparro']."</option>";
					} while ($registro=mysql_fetch_assoc($query));
					echo "</select></td></tr>"; 
					echo "<tr><td><span>Accion</span></td>";
					echo "<td><select name='estatus'>";
					echo "<option value=''></option>";
					echo "<option value=0>Ocultar de consultas</option>";
					echo "<option value=1>Hacer visible en consultas</option>";
					echo "</select>";
					echo "</td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Eliminar'>";
					echo "</form>";
					}
							
				if ($_POST['tabla']=="jornalero"){
					echo "<form method=post name=elimjorna action='../controlador/elijornal.php'>";
					echo "<tr><td><span>Jornalero</span></td><td>";
					$SQL="SELECT numjornal, nombrejornal, estatus FROM jornaleros";
					$funcion->conectar();
					$query=$funcion->consulta($SQL);
					$registro=$funcion->row($query);
					echo "<select name='jorna'>";
					echo "<option value=''></option>";
					do {
					echo "<option value='".$registro['numjornal']."'>".$registro['nombrejornal']."</option>";
					} while ($registro=mysql_fetch_assoc($query));
					echo "</select></td></tr>"; 
					echo "<tr><td><span>Accion</span></td>";
					echo "<td><select name='estatus'>";
					echo "<option value=''></option>";
					echo "<option value=0>Ocultar de consultas</option>";
					echo "<option value=1>Hacer visible en consultas</option>";
					echo "</select>";
					echo "</td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Eliminar'>";
					echo "</form>";
					}
				if ($_POST['tabla']=="jornadas"){
					echo "<form method=post name=elimjornada action='../controlador/elijornada.php'>";
					echo "<tr><td><span>Jornada a eliminar</span></td><td>";
					$SQL="SELECT numjornada, direccion, estatus FROM jornadas";
					$funcion->conectar();
					$query=$funcion->consulta($SQL);
					$registro=$funcion->row($query);
					echo "<select name='jorna'>";
					echo "<option value=''></option>";
					do {
					echo "<option value='".$registro['numjornada']."'>".$registro['direccion']."</option>";
					} while ($registro=mysql_fetch_assoc($query));
					echo "</select></td></tr>";
					echo "<tr><td><span>Accion</span></td>";
					echo "<td><select name='estatus'>";
					echo "<option value=''></option>";
					echo "<option value=0>Ocultar de consultas</option>";
					echo "<option value=1>Hacer visible en consultas</option>";
					echo "</select>";
					echo "</td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Eliminar'>";
					echo "</form>";
					}				
				?>
		  </table>
		  <table><center>
		  <tr><td><a href="paneladmin.php" class="menus">Volver al panel de administraci&oacute;n</a></td></tr></center></table>
		</td></tr>
	</tr>
	</table></center>
		</td></tr>
	</tr>
	</table></center>