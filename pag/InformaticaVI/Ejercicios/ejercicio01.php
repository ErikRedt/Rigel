<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html"/>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../../css/StyleTables.css">
	<?php include ('inc_header.html') ?>
</head>

<body>
<div id="container">
<?php
	include ("inc_bd_connect.php");


		$result = pg_query("SELECT * FROM alumno");

		if ($result)
		{
			echo "<table>";
			echo "<th>ID</th>
			<th># cuenta</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>";
			$registros= pg_num_rows($result);

			for ($i=0;$i<$registros;$i++){
				echo "<tr>";
				$row = pg_fetch_array ($result,$i );
				echo "<td>" . $row['idalumno'] . "</td>";
				echo "<td>" . $row['nocta'] . "</td>";
				echo "<td>" . $row['noalumno'] . "</td>";
				echo "<td>" . $row['appaterno'] . "</td>";
				echo "<td>" . $row['apmaterno'] . "</td>";
				//echo  "<br>";
				echo "</tr>";
			}
			echo "</table>";
			pg_free_result($result);

		}


	include ('inc_footer.html')
?>

</body>
</html>
