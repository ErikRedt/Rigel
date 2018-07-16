<?php
    //include '../model/Conex_DB.php';
    include '../model/alumno.php';
    //$db = new conection();
    $updatealumno = new alumno;

    $updatealumno -> set("id", $_POST["idalumno"]);
    $updatealumno -> set("nocta", $_POST["nocta"]);
    $updatealumno -> set("noalumno", $_POST["noalumno"]);
    $updatealumno -> set("appaterno", $_POST["appaterno"]);
    $updatealumno -> set("apmaterno", $_POST["apmaterno"]);

    $updatealumno -> updateAlumno();
?>
