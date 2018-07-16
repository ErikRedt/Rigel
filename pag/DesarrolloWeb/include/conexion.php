<?php
  include("include.php");
  
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
	 echo "No pudo establecerse una conexi&oacute;n con la base de datos";
	 exit();
  }
?>