<?php
include '../Clases/Conex_DB.php';

  session_start();
  if (isset($_SESSION['email'])) {
    header('Location: ../Views/select.php');
  }
  $login = new user;
  $login->login();




      class user{


        //atrubutos
        private $iduser, $email, $password;
        private $db;

        //metodos
        public function __construct(){
          $this->db = new conection;
        }

          //set
        public function set($atributo,$valor){
          $this->$atributo=$valor;
        }
          //get
          public function get($atributo){
          return $this->$atributo;
        }

          }
          public function login(){
            //$email=$_POST['email'];
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
              $sql = "SELECT iduser, email, password FROM user WHERE email = \"$_POST[email]\"";
              $result = $this->db->query($sql);
              $reg = mysql_fetch_assoc($result);
              $message = '';

              if (count($reg) > 0 && ($_POST[password]==$reg[password])) {
                $_SESSION['email'] = $reg['email'];
                header("Location: ../Views/select.php");
              } else {
                //var_dump($reg);
              echo "<script>alert('error');</script>";
              }
            }

          }

  }



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsividad-->

    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Dreamhome.css">

  </head>
  <body class="general">
    <style>

    </style>
    <?php require '../header.php' ?>


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar Sesión</h1>
    <span>o <a href="signup.php">Registrarse</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="E-mail...">
      <input name="password" type="password" placeholder="Password...">
      <input type="submit" value="Iniciar Sesión">
    </form>
  </body>
</html>
