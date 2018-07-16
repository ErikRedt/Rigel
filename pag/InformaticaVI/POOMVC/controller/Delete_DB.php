<?php
    //include '../model/Conex_DB.php';
    include '../model/alumno.php';
    //$db = new conection();
    $deletealumno = new alumno;

    $deletealumno -> set("id", $_POST["idalumno"]);
    $deletealumno -> deleteAlumno();
?>
