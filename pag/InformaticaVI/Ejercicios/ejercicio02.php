<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php include ('inc_header.html') ?>
</head>

<body>
<div id="container">
<?php
	include ("inc_bd_connect.php");

	$loginOK  = false;

	if (isset($_POST['submitlog']))
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$result = pg_query("SELECT appaterno FROM alumno WHERE nombre = '$login'");
		if ($result)
		{
			$row = pg_fetch_array($result);
			if ($row['appaterno'] == $password)
				$loginOK = true;
			pg_free_result($result);
		}
	}


	if ($loginOK != true)
	{
		print ("<h2>Identificación</h2>");
		print ("<form method=\"post\" action=\"" .$_SERVER['PHP_SELF']. "\" >");
		print (" Usuario <input type=\"text\" name=\"login\" size=\"16\" />"); 
		print (" Contraseña <input type=\"password\" name=\"password\" size=\"16\" />");
		print (" <input type=\"submit\" name=\"submitlog\" value=\" OK \" />");
		print ("</form>");
	}
	else 
	{
		
?>

		<p>Este Es un ejemplo.</p>
		
<?php
	}
	include ('inc_footer.html') 
?>

</body>
</html>