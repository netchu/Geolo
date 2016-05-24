<?php
	class conex{
		private $usuario;
		private $clave;
		private $servidor;
		private $bd;
		private $conex;
			function conex(){
				$this->usuario="root";
				$this->clave="rootroot";
				$this->servidor="localhost";
				$this->bd="localizacion";
				$this->conex='';
				}
			function conectar(){
				$this->conex=mysql_connect($this->servidor,$this->usuario,$this->clave) or die(mysql_error());
				$bdd=mysql_select_db($this->bd,$this->conex);
				return $this->conex;
}
			function consulta($qconsulta){
				$query=mysql_query($qconsulta, $this->conex);
				if (!$query) {
    $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
    $mensaje .= 'Consulta completa: ' . $qconsulta;
    die('mysql_error()');
}
				return $query;
				}
			function row($qconsulta){
				$mostrar=mysql_fetch_assoc($qconsulta) or die(mysql_error());
				return $mostrar;
				}
			function cerrar(){
				$this->conex=mysql_close($this->conex);
				return $this->conex;
				}
}
$funcion=new conex();
?>
