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
		<form name="formconsul" method="post" action="../controlador/consulta.php">
			<table  height="113" border="0" align="right">
        <tr>
          <td width="113" ><span>Parroquia:</span></td>
          <td width="144">
		<?php
		$funcion->conectar();
		$SQL="SELECT numparroquia, nombreparro, estatus FROM parroquia";
		$query=$funcion->consulta($SQL);
		$registro=$funcion->row($query);
		echo "<select name='parro'>";
		echo "<option value=''></option>";
		do {
			if($registro['estatus']==1){
			echo "<option value='".$registro['numparroquia']."'>".$registro['nombreparro']."</option>";}
		} while ($registro=mysql_fetch_assoc($query));
		echo "</select>";
?>
		  </td>
        </tr>
        <tr>
          <td colspan="2" align=right><input type="submit" name="Submit" value="Consultar">
        </tr>
      </table>
    </form></td></tr>
</tr>
</table></center>