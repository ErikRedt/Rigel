<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/Dreamhome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--respobsibilidad-->

    <title>Ver casa</title>

  </head>

  <body class="general">
    <style>
    body{
      margin:0;
    }
ul {
  position: fixed;
  width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    opacity: .80;
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

    <?php
    require_once("../Controllers/ver.php");
    ?>





  </body>

</html>
