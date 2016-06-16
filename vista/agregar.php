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
			  <td colspan="2"><div align="center">A&Ntilde;ADIR DATOS </div></td>
			</tr>
			<tr>
			  <td><span>Dato a a&ntilde;adir</span></td>
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
					echo "<form method=post name=agreparro action='../controlador/agregarparroquia.php'>";
					echo "<tr><td colspan=2><span>PARROQUIA</span></td></tr>";
					echo "<tr><td><span>Nombre de Parroquia</span></td><td><input name='nombreparro' type='text'></td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Agregar'>";
					echo "</form>";
					}
				if ($_POST['tabla']=="jornadas"){
					echo "<form method=post name=agrejornada action='../controlador/agregarjornada.php'>";
					echo "<tr><td colspan=2><span>JORNADAS</span></td></tr>";
					echo "<tr><td><span>Fecha de Jornada</span></td><td><input name='fechajornada' type='date'></td></tr>";
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
					echo "</select></td></tr>"; //aca termina el select orz
					echo "<tr><td><span>Direccion</span></td><td><input name='direccion' type='text'></td></tr>";
					echo "<tr><td><span>Telefono de contacto</span></td><td><input name='tlfcontacto' onkeypress='return isNumberKey(event)' type='text'></td></tr>";
					echo "<tr><td><span>Rubros</span></td><td><input name='descripcion' type='text'></td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Agregar'>";
					echo "</form>";
					}
				if ($_POST['tabla']=="jornalero"){
					echo "<form method=post name=agreparro action='../controlador/agregarjornal.php'>";
					echo "<tr><td colspan=2><span>JORNALERO</span></td></tr>";
					echo "<tr><td><span>Nombre de Jornalero</span></td><td><input name='nombrejornal' type='text'></td></tr>";
					echo "<tr><td colspan='2'><input type='submit' value='Agregar'>";
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