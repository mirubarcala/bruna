<?php

require 'loader.php';
if($_POST) {
        $tipoConexion = "MYSQL";
    if($tipoConexion=="JSON"){
        $user = new User($_POST['email'], $_POST['password']);
        $errors = $validator->validate($user);
    if(count($errors) == 0) {
        $result = $db->search($user->getEmail());
        if($result) {
            if($auth->validatePassword($user->getPassword(), $result['password'])){
                $auth->login($user->getEmail());
                redirect('profile.php');
            }
        }
    }
} else{
    
    $user = new User ($_POST["email"],$_POST["password"]);
    $errors= $valite ->validateLogin($user);
    if(count($errors)==0){
      $userFound = BaseMYSQL::searchEmail($user->getEmail(),$pdo,'users');
      if($userFound == false){
        $errors["email"]="Usuario no registrado";
      }else{
        if(Autenticador::verifyPassword($user->getPassword(),$userFound ["password"] )!=true){
          $errors["password"]="Error en los datos verifique";
        }else{
          Autenticador::setSession($userFound);
          if(isset($_POST["recordar"])){
            Autenticador::setCookie($userFound);
          }
          if(Autenticador::validateUser()){
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