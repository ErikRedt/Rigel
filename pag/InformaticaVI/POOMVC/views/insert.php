<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../../../css/StyleLayout.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/StyleCRUDPOOMVC.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--respobsibilidad-->
    <script type="text/javascript" src="../../../../JS/layout.js"></script>

    <title>CRUD POO MVC</title>

  </head>

  <body>
    <div class="topnav" id="myTopnav">
      <a class="active" href="../../../../index.html">Inicio</a>
      <a href="../../../InformaticaVI/InformaticaVI.php">Informática VI</a>
      <a href="../../../DesarrolloWeb/DesarrolloWeb.php">Desarrollo Web</a></li>
      <a href="../../../Horario.php">Horario 6to semestre</a>
      <a href="../../../pruebas/pruebas.html">Pruebas</a>
      <a href="javascript:(void);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      <span><a style="float:right" href=mailto:"erikr2787@gmail.com">Contacto</a></span>
      <i style="float:right"><img src="../../../../img/tree.png" width="30" height="40" alt="tree"></i>
    </div>

    <h1>Ingresa los datos del alumno a crear</h1>

    <div id="form">
      <form action="../controller/Insert_DB.php" method="post">
        <label>ID alumno</label><br>
        <input type="number" name="idalumno"><br>
        <label># de cuenta</label><br>
        <input type="number" name="nocta"><br>
        <label>Nombre</label><br>
        <input type="text" name="noalumno"><br>
        <label>Apellido Paterno</label><br>
        <input type="text" name="appaterno"><br>
        <label>Apellido Materno</label><br>
        <input type="text" name="apmaterno"><br><br>
        <input type="submit" value="Insertar registro">
      </form>
    </div>


    <footer>
      Derechos reservados &copy; 2018
    </footer>

  </body>

</html>
