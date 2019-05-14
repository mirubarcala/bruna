<?php

require 'loader.php';

if($_POST) {
    $user = new User($_POST['email'], $_POST['password']);
    $errors = $validator->validate($user);
    if(count($errors) == 0) {
        $result = $db->search($user->getEmail());
        if($result) {
            if($auth->validatePassword($user->getPassword(), $result['password'])){
                //dd('ENTRE');
                $auth->login($user->getEmail());
                redirect('profile.php');
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