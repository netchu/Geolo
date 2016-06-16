<html>
<header>
<meta name="description" content="Sistema de Geolocalizacion">
<meta name="keywords" content="Sistema, geolocalizacion, jornadas, alimentacion, gobierno, bolivariano, venezuela, pdval, mercal, mercalito, pdmercal"/>
<meta name="Revisit" content="1 day"/>
<meta name="Robots" content="All"/>
<title>Sistema de Geolocalizaci&oacute;n de Jornadas de Alimentaci&oacute;n</title>
<script language=Javascript>
       function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
		</script>
</header>
<body>
<?php include '../header.php'; ?>

<center><table border="0">
<tr>
	<td> 
		<form name="Formagregar" method="post">
		  <table  border="1" align="right">
			<tr>
			  <td colspan="2"><div align="center">REPORTES </div></td>
			</tr>
			<tr>
			  <td><span>Tipo de reporte</span></td>
			  <td>
				<select name="tabla" onchange=Formagregar.submit()>
					<option value=""></option>
					<option value="todas">Todas las Jornadas</option>
					<option value="fecha">Jornadas por fecha</option>
					<option value="parroquia">Jornadas por parroquia</option>
				</td>
				</form>
			</tr>
			<?php
				if ($_POST['tabla']=="todas"){
					echo "<form method=post name=agreparro action='../controlador/generar.php'>";
					echo "<tr><td colspan=2><span>Todas las Jornadas</span></td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Generar'>";
					echo "</form>";
					}
				if ($_POST['tabla']=="fecha"){
					echo "<form method=post name=agrejornada action='../controlador/generarporf.php'>";
					echo "<tr><td colspan=2><span>Jornadas por fecha</span></td></tr>";
					echo "<tr><td><span>Fecha</span></td><td><input name='fechajornada' type='date'></td></tr>";
					 //aca termina el select orz
					echo "<tr><td colspan='2'><input type='submit' value='Generar'>";
					echo "</form>";
					}
				if ($_POST['tabla']=="parroquia"){
					echo "<form method=post name=agreparro action='../controlador/generarporp.php'>";
					echo "<tr><td colspan=2><span>Jornadas por parroquia</span></td></tr>";
					echo "<tr><td><span>Parroquia</span></td><td>";
					$SQL="SELECT numparroquia, nombreparro FROM parroquia";
					$funcion->conectar();
					$query=$funcion->consulta($SQL);
					$registro=$funcion->row($query);
					echo "<select name='parro'>";
					echo "<option value=''></option>";
					do {
					echo "<option value='".$registro['numparroquia']."'>".$registro['nombreparro']."</option>";
					} while ($registro=mysql_fetch_assoc($query));
					echo "</select></td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Generar'>";
					echo "</form>";
					}
				
					
				?>
				
		  </table>
		  <table><center>
		  <tr><td><a href="paneladmin.php" class="menus">Volver al panel de administraci&oacute;n</a></td></tr></center></table>
		</td></tr>
	</tr>
	</table></center>