<?php

require 'loader.php';

?>

<!DOCTYPE html>
<html>
<?php require 'head.php'; ?>
<body>

<header>
<?php require 'navbar.php'; ?>	
</header>

<main class = "principalcarrito">
    <section class="seccion1carrito row">
      <div class="card articulo1carrito" style="width: 18rem;">
        <img src="img/producto1.jpg" class="card-img-top img-articulo1carrito" alt="producto1">
        <div class="card-body">
          <p class="card-text titulocarrito">Lorem ipsum dolor</p>
          <p class="detallecarrito">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat doloribus explicabo rem culpa nesciunt corrupti autem nisi consequuntur nihil distinctio!</p>
          <p class="preciocarrito">$150</p>
        </div>
      </div>
      <div class="card articulo1carrito" style="width: 18rem;">
          <img src="img/producto2.jpg" class="card-img-top img-articulo1carrito" alt="producto2">
          <div class="card-body">
            <p class="card-text titulo">Lorem ipsum dolor</p>
            <p class="detallecarrito">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat doloribus explicabo rem culpa nesciunt corrupti autem nisi consequuntur nihil distinctio!</p>
            <p class="preciocarrito">$150</p>
          </div>
        </div>
        <div class="card articulo1carrito" style="width: 18rem;">
            <img src="img/producto3.jpg" class="card-img-top img-articulo1carrito" alt="producto3">
            <div class="card-body">
              <p class="card-text titulocarrito">Lorem ipsum dolor</p>
              <p class="detallecarrito">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat doloribus explicabo rem culpa nesciunt corrupti autem nisi consequuntur nihil distinctio!</p>
              <p class="preciocarrito">$150</p>
            </div>
          </div>
          <div class="card articulo1carrito" style="width: 18rem;">
              <img src="img/producto4.jpg" class="card-img-top img-articulo1carrito" alt="producto4">
              <div class="card-body">
                <p class="card-text titulo">Lorem ipsum dolor</p>
                <p class="detallecarrito">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat doloribus explicabo rem culpa nesciunt corrupti autem nisi consequuntur nihil distinctio!</p>
                <p class="preciocarrito">$150</p>
              </div>
            </div>
            <div class="card articulo1carrito" style="width: 18rem;">
                <img src="img/producto5.jpg" class="card-img-top img-articulo1carrito" alt="producto5">
                <div class="card-body">
                  <p class="card-text titulocarrito">Lorem ipsum dolor</p>
                  <p class="detallecarrito">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat doloribus explicabo rem culpa nesciunt corrupti autem nisi consequuntur nihil distinctio!</p>
                  <p class="preciocarrito">$150</p>
                </div>
              </div>
              <div class="card articulo1carrito" style="width: 18rem;">
                  <img src="img/producto6.jpg" class="card-img-top img-articulo1carrito" alt="producto6">
                  <div class="card-body">
                    <p class="card-text titulocarrito">Lorem ipsum dolor</p>
                    <p class="detallecarrito">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat doloribus explicabo rem culpa nesciunt corrupti autem nisi consequuntur nihil distinctio!</p>
                    <p class="preciocarrito">$150</p>
                  </div>
                </div>
    </section>
</main>

<?php require 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>