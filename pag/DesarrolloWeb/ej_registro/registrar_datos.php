<?php
include("../include/conexion.php");
?>
<html content="text/html;" http-equiv="content-type" charset="utf-8">
<head>
  <title>Pr&aacute;ctica con base de datos</title>
</head>
<body>
<table cellspacing="0" align="center" width="65%">
  <tr>
    <th colspan="3">Registro de datos</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
<?php	
	$f_nacimiento =  $_POST[anio_nacimiento]."-".$_POST[mes_nacimiento]."-".$_POST[dia_nacimiento];
    mysqli_query($conn, "INSERT INTO datos_personales (nombre,apellido_p,apellido_m,sexo,f_nacimiento,calle,numero_int,numero_ext,colonia,delegacion_municipio,estado,cp,telefono,e_mail) VALUES (UCASE('$_POST[nombre]'),UCASE('$_POST[apellido_p]'),UCASE('$_POST[apellido_m]'),'$_POST[sexo]','$f_nacimiento',UCASE('$_POST[calle]'),'$_POST[num_int]','$_POST[num_ext]',UCASE('$_POST[colonia]'),UCASE('$_POST[delegacion_municipio]'),UCASE('$_POST[estado]'),'$_POST[cp]','$_POST[telefono]','$_POST[email]')") or die(mysqli_error());
	 echo "La inscripci&oacute;n se registr&oacute satisfactoriamente."; 
?>
    </td>
  </tr>
  <tr>
    <td height="50" align="center"><input type="button" name="aceptar" value="Aceptar" onClick="javascript: window.parent.location.href='index.php'"></td>
  </tr>
</table>
</body>
</html>
