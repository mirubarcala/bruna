<?php
require 'loader.php';
if ($_POST){
    
    $tipoConexion = "MYSQL";
    
    if($tipoConexion=="JSON"){
      $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"],$_POST["nombre"],$_FILES );
    
      $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
      
      if(count($errores)==0){
        $usuarioEncontrado = $json->buscarEmail($usuario->getEmail());
        
        if($usuarioEncontrado != null){
          $errores["email"]="Usuario ya registrado";
        }else{
          $avatar = $registro->armarAvatar($usuario->getAvatar());
          $registroUsuario = $registro->armarUsuario($usuario,$avatar);
        
          $json->guardar($registroUsuario);
        
          redirect ("login.php");
        }
      }
    }
   else{
     
    $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"],$_POST["nombre"],$_FILES );
    
    $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
    
    if(count($errores)==0){
      
      $usuarioEncontrado = BaseMYSQL::buscarPorEmail($usuario->getEmail(),$pdo,'users');
      if($usuarioEncontrado != false){
        $errores["email"]= "Usuario ya Registrado";
      }else{
        
        $avatar = $registro->armarAvatar($usuario->getAvatar());
        
        BaseMYSQL::guardarUsuario($pdo,$usuario,'users',$avatar);
       
        redirect ("login.php");
      }
    }
  
   } 
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
<header>
<?php require 'navbar.php'; ?>	
</header>

<main>
    <div class="register-form">
            <form action="" method="post">
                <div class="avatar">
                    <img src="img/User-Profile.png" alt="Avatar">
                </div>
                <h2 class="text-center"> REGISTRO </h2>

                <div class="">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required" value=""> 
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email" required="required" value=""> 
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Telefono" required="required" value="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="repassword" placeholder="Confirmar contraseña" required="required">
                </div>        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Registrate</button>
                </div>
            </form>
        </div>


    </main>


<?php require 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>