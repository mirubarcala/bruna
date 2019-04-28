<?php
include_once("controladores/funciones.php");
if($_POST){
  
  $errores = validar($_POST);
  if(count($errores)===0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario ==null){
      $errores["email"]="Usted no esta registrado";
    }else {
      if(password_verify($_POST["password"],$usuario["password"])===false){
        $errores["password"]= "Datos incorrectos";
      }
    }
    crearSesion($usuario,$_POST);
    if (validarUsuario()){
      header("location: home.php");
    }else{
      header("location: registro.php");
    }  
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BRUNA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>

    <header>
        <section class="container">
                    
            <section class="navbarright">
                <article class="col-12 col-md-12 col-lg-12">
                    <nav class="navbar-nav ml-auto">
                         <ul>
                            <li>
                                <a href="home.php">HOME</a>
                                <a href="#">PRODCUTOS</a>
                                <a href="#">NOSOTROS</a>
                                <a href="#footer">CONTACTO</a>
                              
                            </li>
                        </ul>
                    </nav>
                </article>
            </section>
                        
            
            <section class="logo">
                <a href=""><img src="img/bruna.png"></a>
            </section>
            
            
            <section class="icon-bar">
                <article class="col-12 col-md-12 col-lg-12">
                    <a href="#"><i class="fa fa-heart"></i></a>
                    <a href="#"><i class="fa fa-search"></i></a> 
                    <a href="#"><i class="fa fa-shopping-cart"></i></a> 
                    <a href="#"><i class="fa fa-user"></i></a> 
                                
                </article>
            </section>
            
    </header>

    <main>
            <div id="faqs" class="login-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <div class="avatar">
                            <img src="img/User-Profile.png" alt="Avatar">
                        </div>
                        <h2 class="text-center"> LOGIN</h2>   
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required="required">
                        </div>        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Logeate</button>
                        </div>
                        <div class="clearfix">
                            <label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
                            <a href="#" class="pull-right">¿Olvidaste la contraseña?</a>
                        </div>
                    </form>
                    <p class="text-center small">¿No tenes una cuenta? <a href="registro.php">Registrate</a></p>
                </div>


    </main>

    <div class="container-fluid">
            <!-- Footer -->
            <footer id="footer" class="page-footer font-small teal pt-4">
            
                            <!-- Footer Text -->
                     <div class="container-fluid">
                    
                                <!-- Grid row -->
                    <div class="row">
                    
                                    <!-- Grid column -->
                        <div class="col-md-4 mt-md-0 mt-4">
                    
                                        <!-- Content -->
                                        <h5 class="text-uppercase font-weight-bold">COMO PODEMOS AYUDARTE</h5>
                                        <a href="#">Trakea tu orden</a> <br>
                                        <a href="faqs.php">FAQs</a><br>
                                        <a href="#">Delivery</a>
                                
                        </div>
                                    <!-- Grid column -->
                    
                                    <hr class="d-md-none pb-4">
                    
                                    <!-- Grid column -->
                        <div class="col-md-4 mb-md-0 mb-4">
                    
                                        <!-- Content -->
                                        <h5 class="text-uppercase font-weight-bold">CONTACTO</h5>
                                        <p>TEL | 4786-8907</p>
                                        <p>MAIL | info@bruna.com</p>
                                        <p>DIRECCION | Monroe</p>
                        </div>
                                    <!-- Grid column -->
                                    
                                    <!-- Grid column -->
                                    <div class="col-md-4 mt-md-0 mt-4">
            
                                            <!-- Content -->
                                            <h5 class="text-uppercase font-weight-bold">SOBRE NOSOTROS</h5>
                                                <a href="#">Nuestra Compañia</a> <br>
                                                <a href="#">Nosotros</a>
                                    </div>
            
                                </div>
                                </div>
                                <!-- Grid row -->
                    
                                    </div>
                            <!-- Footer Text -->
                    
                            <!-- Copyright -->
                                                    <div class="footer-copyright">© 2019 BRUNA SRL. Todos los derechos reservados.
                                                    </div>
                            <!-- Copyright -->
                    
                        </footer>
                        <!-- Footer -->
</div>
            
</body>