
<?php echo validation_errors(); ?>
<?php echo $message; ?>
<br>
<br>
<br>
<br>
<form name="alta" method="post" action="index.php/admin_controller/add">
	<label for="idfrm">id alumno: </label>
	<input type="text" placeholder="alumno" name="idfrm" id="idfrm">
        <br/>
	<label for="ctafrm">Num de cuenta: </label>
	<input type="text" placeholder="alumno" name="ctafrm" id="ctafrm"/>
	<br/>
	<label for="nomfrm">Nombre alumno: </label>
	<input type="text" placeholder="alumno" name="nomfrm" id="nomfrm"/>
	<br/>
	<label for="appfrm">Apellido Paterno: </label>
	<input type="text" placeholder="alumno" name="appfrm" id="appfrm"/>
	<br/>
	<label for="apmfrm">Apellido Materno: </label>
	<input type="text" placeholder="alumno" name="apmfrm" id="apmfrm"/>
	<br/>
	<input type="submit" name="form" value="Registrar Alumno"/>
</form>
<br>
<br>
<a href="<?= base_url('index.php'); ?>">REGRESAR</a>