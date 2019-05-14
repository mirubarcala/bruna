<?php
require 'loader.php';

$errors = array();

if($_POST) {
    $avatar = null;
    $user = new User($_POST['email'], $_POST['password']);

    if ($_FILES['avatar']) {
        $avatar = $_FILES;
        $file = $db->saveAvatar($avatar, $user);
        $user->setAvatar($file);
    }

    $errors = $validator->validate($user, $_POST['cpassword']);

    if(count($errors) == 0) {
        $userArray = $factory->create($user);
        $db->save($userArray);
        redirect('login.php');

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


    <?php
      if(count($errors) > 0):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errors as $error) :?>
            <li> <?=$error; ?> </li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>

    <main>
            <div class="register-form">
                    <form action="" method="post" enctype="multipart/form-data">
      
                        <div class="avatar">
                            <img src="img/User-Profile.png" alt="Avatar">
                        </div>
                    
                        <h2 class="text-center"> REGISTRO</h2>   
                        
                        <div class="">

                        <input name="nombre" type="text" id="nombre" value ="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>" class="form-control"  placeholder="Nombre">
                        </div>
                        <br>
                        <div class="">
                            <input name="email" type="email" id="email" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" 
                             class="form-control"  placeholder="Email">
                        </div>
                        <div class="">
                            <input name="telefono" type="tel" id="telefono" value="<?=isset($errores["telefono"])? "":inputUsuario("telefono") ;?>"  class="form-control" placeholder="Teléfono">
                        </div>
                        <br>
                        <div class="">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                        <br>   
                        <div class="">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirmar Contraseña">
                        </div>
                        <br>        
                        <div class="">
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