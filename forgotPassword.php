<?php

?>

<!DOCTYPE html>
<html lang="en">
    <!-- importo el head del html para tener el home mas limpio -->
    <?php require 'head.php'; ?>
<body>
    <!-- importo el header -->
    <?php require 'header.php'; ?>
    <!-- importo el header -->

    <!-- home -->
<main>
    <div id="faqs" class="login-form">
            <form action="" method="post">
                <div class="avatar">
                    <img src="img/User-Profile.png" alt="Avatar">
                </div>
                <h2 class="text-center"> RECUPERA TU CONTRASEÑA</h2>   
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Nueva contraseña" required="required">
                </div>  
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Confirmar contraseña" required="required">
                </div>         
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar cambios</button>
                </div>
                <div class="backToLogin">
                  <a href="login.php" class="pull-right">Volver al login</a>
                </div>
            </form>
        </div>


    </main>
    <div class="container-fluid">
      <!-- importo el footer -->
      <?php require 'footer.php'; ?>
      <!-- importo el footer -->
    </div>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>