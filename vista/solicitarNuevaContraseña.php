<?php
  
  session_start();

  require_once (__DIR__."/../controlador/mdb/mdbUsuario.php");
  require_once (__DIR__."/../modelo/entidad/Usuario.php");

  //obtiene las variables tomadas del act_recuperarContraseña.php por medio del enlace

  $id_usuario= $_GET['idU'];
  $encEmail  = $_GET['id1'];
  $encFecha  = $_GET['id2'];

  $sw=1;
  $usuario = verUsuarioPorId($id_usuario);        
  
?>

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

    <header >
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

      <?php
        if($usuario==null){
          $msg="usuario especificado no existe";
          $sw=0;
        }else{//si encuentra el usuario, le mostrará el formulario para realizar el cambio de contraseña
          date_default_timezone_set("America/Bogota");  
          $name = $usuario->getNombre();
          $emailu = $usuario->getEmail();         
          $codigo1 = crypt($emailu,'$1$');
          $codigo2 = crypt(date('Y-m-d'), '$1$');          
          if($codigo1==$encEmail && $codigo2==$encFecha){
        

      ?>

      <div class="container" >

        <div class="row justify-content-center">
    
          <div class="col-xl-10 col-lg-12 col-md-9">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Línea anidada en el cuerpo de la tarjeta -->
                <div class="row">

                  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Hola, <?php echo $name?>!</h1>
                        <h2 class="h4 text-gray-900 mb-4">Puedes continuar con el proceso de cambio de contraseña</h2>
                      </div><!--formulario de cambio-->
                      <form class="user" method="post" action ="../controlador/accion/act_establecerNuevaContraseña.php">                         
                        <input name="id" type="hidden" value="<?php echo $id_usuario; ?>">                        
                        <div class="form-group">
                          <input name="new_password" type="password" class="form-control form-control-user"  aria-describedby="emailHelp" placeholder="Ingrese una nueva contraseña">
                        </div>
                        <div class="form-group">
                          <input  type="password" class="form-control form-control-user"  aria-describedby="emailHelp" placeholder="Ingrese de nuevo su contraseña nueva">
                        </div>                                                 
                        <button type="submit" class="btn btn-primary btn-user btn-block">                        
                          Cambiar
                        </button>                        
                      </form>
                      <hr>
                      <div class="text-center"> 
                        <a class="small" href="login.php">Ya tiene cuenta? Ingrese!</a>
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
      <br>
      <?php
          }//sino, mostrará la siguiente tarjeta
          else{         
      ?>
      <div class="container" >
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Línea anidada en el cuerpo de la tarjeta -->
                <div class="row">             
                  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Hola! Lamento informarle que ha ocurrido un error, es posible
                          que usted haya usado el enlace un día después de su creación, o que alguna de las credenciales
                          de autentificación son erróneas, le invitamos a volver a solicitar el cambio de contraseña
                          o por el contrario, si no posee una:</h1>
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
      <br>
      <br>
      <br>
      <br>
      <br>

      <?php
          }
        }
      ?>
      
<!--pie de pagina -->      
      
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