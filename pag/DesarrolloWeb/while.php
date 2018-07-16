<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../css/StyleLayout.css">
  <link rel="stylesheet" type="text/css" href="./css/StyleDesWeb.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--respobsibilidad-->
  <script type="text/javascript" src="../../JS/layout.js"></script>
  <title>Desarrollo Web</title>

</head>
<body>

  <div class="topnav" id="myTopnav">
    <a href="../../index.html">Inicio</a>
    <a href="../InformaticaVI/InformaticaVI.php">Informática VI</a>
    <a class="active" href="./DesarrolloWeb.php">Desarrollo Web</a></li>
    <a href="../Horario.php">Horario 6to semestre</a>
    <a href="../pruebas/pruebas.html">Pruebas</a>
    <a href="javascript:(void);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    <span><a style="float:right" href=mailto:"erikr2787@gmail.com">Contacto</a></span>
    <i style="float:right"><img src="../../img/tree.png" width="30" height="40" alt="tree"></i>
  </div>

    <section>

    <h1>While</h1>
    <p>
		<?php
		$n=1;
			while($n<=10){
			echo $n.'<br />';
			$n++;
			}
		?>
	</p>

    <h1>Do while</h1>
    <p>
		<?php
		$n=0;
		do{
			$n++;
			echo $n.'<br />';
			}while($n<=10);
		?>
	</p>

	<h1>For</h1>
    <p>
		<?php
		for ($n=1; $n<=10; $n++){
			echo $n.'<br>';
		}
			?>
	</p>
	</section>


    <footer>
      Derechos reservados &copy; 2018
    </footer>
</body>
</html>
