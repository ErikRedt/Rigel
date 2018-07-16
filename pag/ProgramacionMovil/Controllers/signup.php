<?php

  require '../Clases/database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = $_POST['password'];
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado correctamente';
    } else {
      $message = 'Ocurrio un problema';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsividad-->

    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Dreamhome.css">

  </head>
  <body class="general">

    <?php require '../header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Iniciar sesión</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="E-mail...">
      <input name="password" type="password" placeholder="Nueva password...">
      <input name="confirm_password" type="password" placeholder="Confirmar password...">
      <input type="submit" value="Registrarse">
    </form>

  </body>
</html>
