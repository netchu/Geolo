<html>
<header>
<meta name="description" content="Sistema de Geolocalizacion">
<meta name="keywords" content="Sistema, geolocalizacion, jornadas, alimentacion, gobierno, bolivariano, venezuela, pdval, mercal, mercalito, pdmercal"/>
<meta name="Revisit" content="1 day"/>
<meta name="Robots" content="All"/>
<title>Sistema de Geolocalizaci&oacute;n de Jornadas de Alimentaci&oacute;n</title>
</header>
<body>
<?php include 'header.php'; ?>
<center><table border="0">
<tr><td rowspan='2'><img src="img/alimentacion.jpg" width="400"></td>
<td style="padding-top: 40px;"><center><div><span class="botontxt"><a href="vista/consultajornada.php" target='_blank'>CONSULTAS</a></span><img src="img/boton.jpg"></div></center></td>
<tr><td style="padding-top: 50px;">
  <form name="FormLogin" method="post" action="vista/autenticar.php">
      <table width="258" height="113" border="1" align="right">
        <tr>
          <td colspan="2" bgcolor="#AF1901"><div align="center"><strong>INGRESO ADMINISTRADOR</strong> </div></td>
        </tr>
        <tr>
          <td width="98" bgcolor="#AF1901"><span>Usuario</span></td>
          <td width="144"><input name="usuario" type="text"></td>
        </tr>
        <tr>
          <td bgcolor="#AF1901"><span>Clave</span></td>
          <td><input name="clave" type="password"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="Submit" value="Entrar">
          <input type="reset" name="Submit2" value="Borrar"></td>
        </tr>
      </table>
    </form></td></tr>
</tr>
</table></center>
</body>
</html>