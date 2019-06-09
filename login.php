<?php

require_once 'loader.php';
if($_POST){
    $tipoConexion = "MYSQL";
    if($tipoConexion=="JSON"){
        $usuario = new Usuario($_POST["email"],$_POST["password"]);
        $errores= $validar->validacionLogin($usuario);
        if(count($errores)==0){
        
          $usuarioEncontrado = $json->buscarPorEmail($usuario->getEmail());
          if($usuarioEncontrado == null){
            $errores["email"]="El usuario no existe";
          }else{
            if(Autenticador::verificarPassword($usuario->getPassword(),$usuarioEncontrado["password"] )!=true){
              $errores["password"]="Error de datos. Verificar";
            }else{
              Autenticador::seteoSesion($usuarioEncontrado);
              if(isset($_POST["recordar"])){
                Autenticador::seteoCookie($usuarioEncontrado);
              }
              if(Autenticador::validarUsuario()){
                redirect("profile.php");
              }else{
                redirect("register.php");
              }
            }
          }
        }
    }else{
      
        $usuario = new Usuario($_POST["email"],$_POST["password"]);
        $errores= $validar->validacionLogin($usuario);
        if(count($errores)==0){
          $usuarioEncontrado = BaseMYSQL::buscarPorEmail($usuario->getEmail(),$pdo,'users');
          if($usuarioEncontrado == false){
            $errores["email"]="Usuario no registrado";
          }else{
            if(Autenticador::verificarPassword($usuario->getPassword(),$usuarioEncontrado["password"] )!=true){
              $errores["password"]="Error de datos. Verificar";
            }else{
              Autenticador::seteoSesion($usuarioEncontrado);
              if(isset($_POST["recordar"])){
                Autenticador::seteoCookie($usuarioEncontrado);
              }
              if(Autenticador::validarUsuario()){
                redirect("profile.php");
              }else{
                redirect("register.php");
              }
            }
          }
        }
    }
  }
  ?>


<!DOCTYPE html>
<html>
<?php require 'head.php'; ?>
<body>

<header>
<?php require 'navbar.php'; ?>	
</header>

<main>
            <div id="faqs" class="login-form">
                    <form action="" method="post">
                        <div class="avatar">
                            <img src="img/User-Profile.png" alt="Avatar">
                        </div>
                        <h2 class="text-center"> LOGIN</h2>   
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
                        </div>        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Logeate</button>
                        </div>
                        <div class="clearfix">
                            <label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
                            <a href="#" class="pull-right">¿Olvidaste la contraseña?</a>
                        </div>
                    </form>
                    <p class="text-center small">¿No tenes una cuenta? <a href="register.php">Registrate</a></p>
            </div>


</main>

<?php require 'footer.php'; ?>   
            
</body>