<?php
	include ("inc_bd_connect.php");

		/*
		$id=$_POST['idAlumno'];
		$noCuenta=$_POST['noCuenta'];
		$nombre=$_POST['nombre'];
		$apPat=$_POST['apPat'];
		$apMat=$_POST['apMat'];
		*/

		$query = "INSERT INTO alumno VALUES('$_POST[idAlumno]',
		'$_POST[noCuenta]',
		'$_POST[nombre]',
		'$_POST[apPat]',
		'$_POST[apMat]')";

		$result = pg_query($query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());




		// Free resultset liberar los datos
		pg_free_result($result);
		// Closing connection cerrar la conexión
		pg_close($connect);

		header("location: http://rigel.fca.unam.mx/~li313294633/pag/InformaticaVI/Ejercicios/ejercicio01.php");





?>
