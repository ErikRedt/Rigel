<?php
include("../include/conexion.php");
?>
<html>
<head>

  <title>Práctica con base de datos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../../css/StyleLayout.css">
  <link rel="stylesheet" type="text/css" href="../../css/StyleDesWeb.css">
  <link rel="stylesheet" type="text/css" href="../../../css/StyleList.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--respobsibilidad-->
  <script type="text/javascript" src="../../../JS/layout.js"></script>
  <script language="JavaScript" type="text/javascript" src="../js/changeColorRows.js"></script>
  <link rel="stylesheet" type="text/css" href="../../../css/StyleTables.css">
</head>
<body>

  <div class="topnav" id="myTopnav">
    <a href="../../../index.html">Inicio</a>
    <a href="../../InformaticaVI/InformaticaVI.php">Informática VI</a>
    <a class="active" href="../DesarrolloWeb.php">Desarrollo Web</a></li>
    <a href="../../Horario.php">Horario 6to semestre</a>
    <a href="../../pruebas/pruebas.html">Pruebas</a>
    <a href="javascript:(void);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    <span><a style="float:right" href=mailto:"erikr2787@gmail.com">Contacto</a></span>
    <i style="float:right"><img src="../../../img/tree.png" width="30" height="40" alt="tree"></i>
  </div>
   <table>
        <tr class="titulos">
         <th align="center">
		   <b>N</b>
	     </th>
         <th align="center">
		   <b>NOMBRE</b>
	     </th>
         <th align="center">
           <b>FECHA DE NACIMIENTO</b>
	     </th>
         <th align="center">
           <b>SEXO</b>
	     </th>
         <th align="center">
           <b>DIRECCI&Oacute;N</b>
	     </th>
         <th align="center">
           <b>TEL&Eacute;FONO</b>
	     </th>
         <th align="center">
           <b>E-MAIL</b>
	     </th>
	    </tr>
      <?php
	     $n=1;
	     $query = mysqli_query($conn,
         "SELECT *
          FROM   datos_personales") or die(mysqli_error());
          while($row = mysqli_fetch_array($query)) {
		    if ($n%2==0) {
			  $bgcolor = "#F0F0F0";
		    } else {
			  $bgcolor = "#FFFFFF";
		    }
            echo
		    '<tr bgcolor = '.$bgcolor.' onmouseout="mOut(this,\''.$bgcolor.'\');" onmouseover="mOvr(this);">'
             .'<td align="center"><b>'.$n.'</b></td>'
             .'<td align="center">'.$row[nombre].' '.$row[apellido_p].' '.$row[apellido_m].'</td>'
             .'<td align="center">'.$row[f_nacimoento].'</td>'
             .'<td align="center">'.$row[sexo].'</td>'
             .'<td align="center">'.$row[calle].' Colonia '.$row[colonia].' '.$row[numero_ext].' '.$row[numero_int].' '.$row[delegacion].', '.$row[estado].' '.$row[cp].'</td>'
             .'<td align="center">'.$row[telefono].'</td>'
             .'<td align="center">'.$row[e_mail].'</td>'
            .'</tr>';
		     $n++;
		   }
           mysqli_free_result($query);
	  ?>
	  </table>
    </td>

    <footer>
      Derechos reservados &copy; 2018
    </footer>
</body>
</html>
