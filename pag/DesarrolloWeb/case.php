<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../css/StyleLayout.css">
  <link rel="stylesheet" type="text/css" href="../../css/StyleDesWeb.css">
  <title>Desarrollo Web</title>

</head>
<body>

    <ul class="navul">
      <li class="navli "><a class="navlia" href="../../index.html">Inicio</a></li>
      <li class="navli "><a class="active navlia" href="./DesarrolloWeb.php">Desarrollo Web</a></li>
      <li class="navli"><a class="navlia" href="../Horario.php">Horario 6to semestre</a></li>
      <li style="float: right" class="navli"><a class="navlia" href=mailto:"erikr2787@gmail.com">Erik Rodríguez Granados</a>
      </li>
      <li style="float: right" class="navli"><i><img src="../../img/tree.png" width="30" height="40" alt="tree"></i> </li>
    </ul>

    <p style="margin-top: 3em">
    <?php
    $variable = $_POST["pais"];
      switch($variable){
      case "Mexico": echo "Español";
      break;
      case "Brasil": echo "Portugues";
      break;
      case "EUA": echo "Ingles";
      break;
      case "Italia": echo "Italiano";
      break;
      default;
    }
    ?>
    </p>

    <footer>
      Derechos reservados &copy; 2018
    </footer>
</body>
</html>
