<?php
//conexión a la base de datos destino (li313294633)
	$connect = pg_connect("host=rigel.fca.unam.mx dbname=li313294633 user=li313294633 password =SecureSSHRigel27") or die('No se pudo conectar: ' . pg_last_error());
	//if ($connect) { // si la conexion fue exitosa

	//	print "OK ->La conexion a la base de datos fue exitosa<br><br>";
	//} else{
	//	print "ERROR ->No se logr&oacute; conectar a la base de datos, consulte al administrador del sistema.<br/>";
	//}
?>
