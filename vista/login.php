<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="source/fav-icon.png" />
    <title>Sol Caribe Tours</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lg-style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--Fontawesome CDN-->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body class="bg-gradient-primary">

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
                    ¡Vive la experiencia!
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

      <div class="container">

        <!-- Línea externa -->
        <div class="row justify-content-center">
    
          <div class="col-xl-10 col-lg-12 col-md-9">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Línea anidada en el cuerpo de la tarjeta -->
                <div class="row">
                  <!--Cachorro zuiudo --> 
                  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                      </div>
                      <form class="user" method="post" action ="../controlador/accion/act_login.php"> <!--Parte donde el usuario coloca su correo electrónico -->
                        <div class="form-group">
                          <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
                        </div>
                        <div class="form-group"> <!--Donde pones tu contraseña -->
                          <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                        </div>
                        <div class="form-group"> <!--Opción para comprobar si el usuario quiere recordar la contraseña o no -->
                          <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Recordarme</label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">                        
                          Entrar
                        </button>
                        <hr> <!--Opción de ingresar a través de google -->                        
                        <a href="index.php" class="btn btn-google btn-user btn-block">
                          <i class="fab fa-google fa-fw"></i>Entrar con Google
                        </a> <!-- Opción de iniciar sesión a través de Facebook-->
                        <!-- <a href="index.html" class="btn btn-facebook btn-user btn-block"> -->
                        <a class="btn btn-facebook btn-user btn-block">
                          <i class="fab fa-facebook-f fa-fw"></i>Entrar con Facebook
                        </a>
                      </form>
                      <hr>
                      <div class="text-center"> 
                        <a class="small" href="recuperacion.php">Olvidó su contraseña?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="register.php">Cree su cuenta aquí!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
    
        </div>
    
      </div>

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
    
</body>
</html>