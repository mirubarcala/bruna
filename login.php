<?php
require_once 'loader.php';

if($_POST) {
  $user = new User($_POST['email'], $_POST['password']);
  $errors = $validator->validate($user);
  if(count($errors) == 0){
    $result = $db->search($user->getEmail());
    if($result) {
      if($auth->validatePassword($user->getPassword(), $result['password'])){
        $auth->login($user->getEmail());
        redirect('home.php');
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require 'head.php';?>
<body>
<?php require 'header.php';?>

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
                <?php if(isset($errors['email'])):?>
                <span class="alert alert-danger">
                  <?=$errors['email'] ?>
                </span>
                <?php endif;?>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
                </div>       
                <?php if(isset($errors['password'])):?>
                <span class="alert alert-danger">
                  <?='No ingresaste los datos correctos' ?>
                </span>
                <?php endif;?> 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Logeate</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
                    <a href="forgotPassword.php" class="pull-right">¿Olvidaste la contraseña?</a>
                </div>
            </form>
            <p class="text-center small">¿No tenes una cuenta? <a href="register.php">Registrate</a></p>
        </div>


    </main>

<?php require 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>