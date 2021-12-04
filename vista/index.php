<?php
    session_start();
    if (!isset($_SESSION['ID_USUARIO'])) {
      //header("Location: index.php");
    }else{
      session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="source/fav-icon.png" />
    <title>Sol Caribe Tours</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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

    <div class="contenedorbanner">
      <!--<img src="source/e4e3b479.jpg" alt="Rio magdalena" class="banner">-->
    </div>

    <div class="body">
    <div class="contenedorTarjetas"> 
    <div class="card">
      <img src="source/08f486dd.jpg" class="card-img-top" alt="Imagen aracataca">
    
      <div class="card-body">
        <h5 class="card-title">Aracataca</h5>
        <p class="card-text">Ciudad del realismo mágico</p>
        <a href="#" class="btn btn-primary">Ver más</a>
      </div>
    </div>

      <div class="card">
        <img src="source/dae33d3f.jpg" class="card-img-top" alt="Imagen fundación">
      
        <br>
        <div class="card-body">
          <h5 class="card-title">Fundación</h5>
          <p class="card-text">La depresión cataquera</p>
          <a href="#" class="btn btn-primary">Ver más</a>
        </div>
      </div>
    
        <div class="card">
          <img src="source/98fa7fc7.jpg" class="card-img-top" alt="Imagen Taganga">
        
          <br><br>
          <div class="card-body">
            <h5 class="card-title">Taganga</h5>
            <p class="card-text">El mirador de taganga</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="source/40553ca0.jpg" class="card-img-top" alt="Imagen Cienaga">
        
          <br><br>
          <div class="card-body">
            <h5 class="card-title">Ciénaga</h5>
            <p class="card-text">La ciudad vanidosa</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div> 

      </div>
</body>

<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button">
        <img src="source/icon-facebook.png" alt="icono facebook">
      </a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><img src="source/icon-twitter.png" alt="icono twitter">
      </a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><img src="source/icon-instagram.png" alt="icono instagram">
      </a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright - Todos los derechos reservados
  </div>
  <!-- Copyright -->
</footer>

</html>