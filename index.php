<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM acceso_usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <?php require 'head.php' ?>
    <title>Pagina Principal</title>
</head>
<body class="body">

    <header class="header">
        <?php require 'header.php' ?>
    </header>
    
    <div>
    <main class="main-consultas">
    <?php if(!empty($user)): ?>
        <p> <strong>Bienvenido...</strong> <?= $user['email']; ?></p>
            

      <!-- <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a> -->

            
        <?php require 'mostrar-datos.php' ?>
        <div class="menu-info-tablas">
	          <input class="menu-info-botones" type="search" name="buscar-tablas" id="buscar-tablas" placeholder="Busqueda de datos"
                style="
                    width:300px;
                "
            >
	          <input style="cursor:pointer;" class="menu-info-botones" type="submit" value="Buscar">
            <button style="cursor:pointer;" id="id-menu-info-botones" class="menu-info-botones"><a href="registro.php">Nuevo Registro</a></button>
            
        </div>
        
    

    <?php else: ?>
      <p class="titulos" >Por favor inicie sesión para entrar al sistema.</p><br>

      <a href="login.php">Iniciar Sesión</a>
      <!-- <a href="signup.php">SignUp</a> -->



    <?php endif; ?>
    </main>
    </div>



    <footer class="footer">
        <?php require 'footer.php' ?>
    </footer>

</body>
</html>