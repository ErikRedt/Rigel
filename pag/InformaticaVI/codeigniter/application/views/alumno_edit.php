<?php echo validation_errors(); ?>
<?=$message; ?>
<form name="edit" action="index.php/admin_controller/editAlumno/<?=$id?>" method="post">

	<label for="idfrm">ID Alumno: </label>
	<input type="text" value="<?=$alumnos->idalumno?>" placeholder="alumno" name="idfrm" id="idfrm"/>
	<br/>
	<label for="ctafrm">Num de cuenta: </label>
	<input type="text" value="<?=$alumnos->nocta?>" placeholder="alumno" name="ctafrm" id="ctafrm"/>
	<br/>
	<label for="nomfrm">Nombre alumno: </label>
	<input type="text" value="<?=$alumnos->noalumno?>" placeholder="alumno" name="nomfrm" id="nomfrm"/>
	<br/>
	<label for="appfrm">Apellido Paterno: </label>
	<input type="text" value="<?=$alumnos->appaterno?>" placeholder="alumno" name="appfrm" id="appfrm"/>
	<br/>
	<label for="apmfrm">Apellido Materno: </label>
	<input type="text" value="<?=$alumnos->apmaterno?>" placeholder="alumno" name="apmfrm" id="apmfrm"/>
	<br/>
	<input type="submit" name="form" value="Modificar Alumno"/>
</form>
 <br>
 <br>
 <a href="<?= base_url('index.php'); ?>">REGRESAR</a>
