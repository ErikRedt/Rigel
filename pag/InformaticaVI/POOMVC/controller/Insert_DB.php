<?php
    //include '../model/Conex_DB.php';
    include '../model/alumno.php';
    //$db = new conection();
    $insertalumno = new alumno;

    $insertalumno -> set("id", $_POST["idalumno"]);
    $insertalumno -> set("nocta", $_POST["nocta"]);
    $insertalumno -> set("noalumno", $_POST["noalumno"]);
    $insertalumno -> set("appaterno", $_POST["appaterno"]);
    $insertalumno -> set("apmaterno", $_POST["apmaterno"]);

    $insertalumno -> insertAlumno();
?>
