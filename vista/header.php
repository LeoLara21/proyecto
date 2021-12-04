<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <!--div navegacion-->
        <div class="navegacion">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                
                <a class="navbar-brand" href="index.php" >
                  <img src="source/logo.png" alt="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="guias.php">Guías</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="destinos.php">Destinos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="info.php">Conocenos</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    <!-- ¡Vive la experiencia! -->                                                      
                    <a id="cerrarSesionLink" href="../controlador/accion/act_logout.php">Cerrar Sesión</a>                 
                    <?php
                    if(isset($_SESSION['ID_USUARIO']))
                    echo
                    $_SESSION['NOMBRE_USUARIO'];                                                                           
                    ?>                                                       
                    <a
                      class="btn btn-primary btn-floating m-1"
                      href="login.php"
                      role="button">
                      <img src="source/icon-login.png" alt="icono login">
                    </a>
                  </span>
                </div>
              </div>
            </nav>
          </div>
          <!--Fin div navegacion-->
      </header>
</body>
</html>
