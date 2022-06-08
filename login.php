<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM acceso_usuarios WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: index.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>



<!DOCTYPE html>
<html>
<head>
    <?php require 'head.php' ?>
    <title>Inicio de sesión</title>
</head>
<body class="body">

    <header class="header">
        <?php require 'header.php' ?>
    </header>
    
    <main class="main-login">
        <form class="formularios" action="login.php" method="POST">

            <input class="form-login-input" name="email" type="email" placeholder="Correo electronico" required>
            <input class="form-login-input" name="password" type="password" placeholder="Contraseña" required>
            <input class="form-login-input boton-submit" type="submit" value="Ingresar">
        </form>
    </main>

    <footer class="footer">
        <?php require 'footer.php' ?>
    </footer>

</body>
</html>