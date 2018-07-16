<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/Dreamhome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--respobsibilidad-->

    <title>Lista casas</title>

  </head>

  <body class="general" style="background-color:lightgray;">
    <style>
    body{
      margin:0;
    }
ul {
  width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    opacity: .90;
    height: 40px;
}

li {
    float: left;
}
h4{
  padding: 10px 20px;
  margin: 0;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
}
</style>


    <ul>
            <li><a href='../Controllers/logout.php'><img style="width:20px" src="../Resources/logout2.png"></a></li>
            <li style='float:right;'><h4 style='color:white;'>Hola! <?php echo "<i>".$_SESSION['email']."</i>"; ?></h4></li>
    </ul>

    <div style="margin-left:1em; width:100%">
    <?php
    require_once("../Controllers/Select_DB.php");
    ?>
  </div>






  </body>

</html>
