<?php
require 'loader.php';

if(guest()) {
    redirect('login.php');
}

$user = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">
<?php require 'head.php';?>
<body>
<header>
<section class="container">
		
		<section class="navbarright">
				<article class="col-12 col-md-12 col-lg-12">
					<nav>
						<ul>
							<li class="links">
								<a href="index.php">HOME</a>
								<a href="#">PRODUCTOS</a>
								<a href="#">NOSOTROS</a>
                <a href="#">CONTACTO</a> 
							</li>
						</ul>
						</nav>
				</article>
			</section>
			

	   <section class="logo">
				<a href="index.php"><img src="img/bruna.png"></a>
			</section>


		<section class="icon-bar">
				<article class="col-12 col-md-12 col-lg-12">
					<a href="#"><i class="fa fa-heart"></i></a>
					<a href="#"><i class="fa fa-search"></i></a> 
					<a href="#"><i class="fa fa-shopping-cart"></i></a> 
        <?php if(check()): ?> 
          <a href="index.php"><i class="fa fa-sign-out"></i></a> 
       <?php endif; ?> 
					
				</article>
		</section>

</header>
<main>
  <p class="bienvenido">Bienvenido <?=$user ?></p>
</main>


<?php require 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>