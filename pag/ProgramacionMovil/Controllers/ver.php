<?php
    //include '../model/Conex_DB.php';
    include '../Clases/casa.php';
    //$db = new conection();
    $verCasa = new casa;
    $verCasa -> set("idcasa", $_GET["id"]);
    $verCasa -> verCasa();
?>
