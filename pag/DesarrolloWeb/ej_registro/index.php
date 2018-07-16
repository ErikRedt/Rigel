<?php
include("../include/conexion.php");
?>
<html>
<head>
  <title>Práctica con base de datos</title>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../../css/StyleLayout.css">
  <link rel="stylesheet" type="text/css" href="../css/StyleDesWeb.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--respobsibilidad-->
  <script type="text/javascript" src="../../../JS/layout.js"></script>

  <script languaje="JavaScript">
  function validar() {
    if (document.forms['datos'].nombre.value=='') {
	  document.forms['datos'].nombre.focus;
	  alert('Acción no valída. Debe ingresar su nombre');
	  return false;
  }

    if (document.forms['datos'].apellido_p.value=='') {
	  alert('Acción no valída. Debe ingresar su apellido paterno');
	  return false;
	}
	//if (validarFecha(document.forms['datos'].anio_nacimiento.value,document.forms['datos'].mes_nacimiento.value,document.forms['datos'].dia_nacimiento.value) == false) { return false;
	//}
    if (document.forms['datos'].sexo.value=='') {
	  alert('Acción no valída. Debe ingresar su sexo');
	  return false;
	}
    if (document.forms['datos'].estado.value=='') {
	  alert('Acción no valída. Debe ingresar el estado');
	  return false;
	}
    if (document.forms['datos'].delegacion_municipio.value=='') {
	  alert('Acción no valída. Debe ingresar la delegación');
	  return false;
	}
    if (document.forms['datos'].colonia.value=='') {
	  alert('Acción no valída. Debe ingresar la colonia');
	  return false;
	}
    if (document.forms['datos'].calle.value=='') {
	  alert('Acción no valída. Debe ingresar la calle');
	  return false;
	}
    if (document.forms['datos'].num_ext.value=='') {
	  alert('Acción no valída. Debe ingresar el número exterior');
	  return false;
	} else {
	  document.forms['datos'].submit();
	}
  }
  </script>
  <script language="JavaScript" type="text/javascript" src="../js/setTypeChar.js"></script>
  <script language="JavaScript" type="text/javascript" src="../js/validarFecha.js"></script>
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

  <section >
 <p>Complete la información requerida para registrar sus datos personales:</p>
 <div id="formulario" Style="align-content:center">
  <form name="datos" method="post" action="registrar_datos.php">
   <fieldset>
    <legend>Datos personales:</legend>
	<br />
    <label>Nombre:</label><br />
    <input type="text" name="nombre" maxlength="100" size="25" />
	<br /><br />
    <label>Apellido paterno:</label><br />
    <input type="text" name="apellido_p" maxlength="100" size="25" />
	<br /><br />
    <label>Apellido materno:</label><br />
    <input type="text" name="apellido_m" maxlength="100" size="25" />
	<br /><br />
    <label>Fecha de nacimiento:</label><br />
    <select name="dia_nacimiento">
     <option value=""></option>
	 <?php
       for($n=1; $n <= 31; $n++) {
         echo '<option value="'.$n.'">'.$n.'</option>';
       }
	 ?>
	</select>
	<select name="mes_nacimiento">
     <option value=""></option>
	 <?php
	   $query = mysqli_query($conn,
       "SELECT *
        FROM   fec_meses_del_anio
        ORDER BY fec_meses_del_anio.id_mes ASC") or die(mysql_error());
        while($rows = mysqli_fetch_array($query)) {
           echo '<option value="'.$rows[id_mes].'">'.$rows[mes].'</option>';
        }
        mysqli_free_result($query);
     ?>
    </select>
    <input type="text" name="anio_nacimiento" maxlength="4" size="4" />
	<br /><br />
    <label>Sexo:</label><br />
    <select name="sexo">
	  <option value=""></option>
	  <option value="M">M</option>
	  <option value="H">H</option>
	</select>
	<br /><br />
    <label>Estado:</label><br />
	<select name="estado">
	 <option value=""></option>
     <?php
       $query = mysqli_query($conn,
      "SELECT *
       FROM   cat_estados_republica
       ORDER BY cat_estados_republica.nombre_estado ASC") or die(mysql_error());
       while($rows = mysqli_fetch_array($query)) {
         echo '<option value="'.$rows[id_estado].'">'.$rows[nombre_estado].'</option>';
       }
       mysqli_free_result($query);
     ?>
    </select>
	<br /><br />
    <label>Delegación o municipio:</label><br />
    <input type="text" name="delegacion_municipio" maxlength="50" size="25" />
	<br /><br />
    <label>Colonia:</label><br />
    <input type="text" name="colonia" maxlength="50" size="25" />
	<br /><br />
    <label>Calle:</label><br />
    <input type="text" name="calle" maxlength="50" size="25" />
	<br /><br />
    <label>Núm ext:</label><br />
    <input type="text" name="num_ext" maxlength="50" size="25" />
	<br /><br />
    <label>Núm int:</label><br />
    <input type="text" name="num_int" maxlength="50" size="25" />
	<br /><br />
    <label>Código postal:</label><br />
   <!--<input type="text" name="cp" maxlength="5" size="5" onKeyPress="return setTypeChar(event,'onlyNumbers');"> !-->
    <input type="text" name="cp" maxlength="5" size="5" />
	<br /><br />
    <label>Télefono:</label><br />
    <input type="text" name="telefono" maxlength="10" size="10" accesskey="telefono" /> (a 10 dígitos)
	<br /><br />
    <label>Correo electrónico:</label><br />
    <input type="text" name="email" maxlength="50" size="25" />
 	<br /><br />
    <input type="button" name="registrar" value="Registrar"onClick="javascript: return validar();" />
	<input type="button" name="cancelar" value=" Cancelar " onClick="javascript: return advierte_al_cerrar();" />
   </fieldset>
  </form>
 </div>
</section>

<footer>
  Derechos reservados &copy; 2018
</footer>
</body>
</html>
