<?php
require 'loader.php';
//Armo array para almacenar errores en el caso de que los haya.
$errors = array ();
//empiezo la validacion del form de registro
if($_POST){
  $user = new User( $_POST['email'], $_POST['password']);

  $errors = $validator->validate($user, $_POST['repassword']);
  if (count($errors) == 0) {
    $userArray = $factory->create($user);
    $db->save($userArray);
    redirect('login.php');
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
                <h2 class="text-center"> REGISTRO </h2>   
                <?php if(count($errors) > 0):?>
                  <?php foreach($errors as $error): ?>
                  <p class="errors"> <?=$error ?></p>
                  <?php endforeach;?>
                <?php endif;?>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nombre" required="required" value="<?=isset($errors['name']) ? "" : old('name'); ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email" required="required" value="<?=isset($errors['email']) ? "" : old('email'); ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Telefono" required="required" value="<?=isset($errors['phone']) ? "" : old('phone'); ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="repassword" placeholder="Confirmar contraseña" required="required">
                </div>        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Logeate</button>
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