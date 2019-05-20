<?php
?>
<!DOCTYPE html>
<html lang="en">
  <?php require 'head.php';?>
<body>
  <?php require 'header.php';?>
  <main class="principal-g">

        <h1 class="titulo-faqs">BIENVENIDO AL FAQs DE BRÛNA</h1>
          <div class="container-g">
            <div class="seccion1 row">
                <div class="card-body ask col-xs-12 col-md-6 col-lg-6 ">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted titleask"> Cuál es el plazo de entrega ?</h6>
                  <p class="card-text">Si el producto está disponible en nuestro stock, se realizará la entrega <span id="dots">...</span><span id="more">entre los tres y siete días subsiguientes a la realización del pedido.</span></p>
                  <a onclick="myFunction()" id="myBtn">Ver más</a>
                </div>

                <div class="card-body ask col-xs-12 col-md-6 col-lg-6">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted"> Cuáles son las alternativas de pago disponibles?</h6>
                  <p class="card-text">Los medios de pago son: efectivo, transferencia bancaria, <span id="dots">...</span><span id="more">depósito Bancario de efectivo o cheques,tarjetas de débito y tarjetas de crédito (Visa, Cabal, Master, Amex y Tarjeta Naranja).</span></p>
                  <a onclick="myFunction()" id="myBtn">Ver más</a>
                </div>

                <div class="card-body ask col-xs-12 col-md-6 col-lg-6">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted"> Tienen garantía los productos?</h6>
                  <p class="card-text">La garantía de nuestros productos es de 6 meses. Tendrá validez siempre y cuando <span id="dots">...</span><span id="more">tenga un defecto de fabricación.</span></p>
                  <a onclick="myFunction()" id="myBtn">Ver más</a>
                </div>
                
                <div class="card-body ask col-xs-12 col-md-6 col-lg-6">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted"> Qué tipo de factura emiten?</h6>
                  <p class="card-text">Emitimos Facturas A y B</p>
                </div>

                <div class="card-body ask col-xs-12 col-md-6 col-lg-6">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted"> Cómo coordino el día y la hora para recibir los productos?</h6>
                  <p class="card-text">Todas las entregas se coordinan de lunes a sábados entre las 10 y las 19.30hs. <span id="dots">...</span><span id="more">La fecha y hora se define con el cliente, siempre dando un margen de 3hs. para recibirlo.</span></p>
                  <a onclick="myFunction()" id="myBtn">Ver más</a>
                </div>

                <div class="card-body ask col-xs-12 col-md-6 col-lg-6">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted">  Cómo realizo una compra?</h6>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing <span id="dots">...</span><span id="more">elit. Soluta, in.</span></p>
                  <a onclick="myFunction()" id="myBtn">Ver más</a>
                </div>

                <div class="card-body ask col-xs-12 col-md-6 col-lg-6">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted">  Puedo cambiar o devolver productos comprados?</h6>
                  <p class="card-text">Las solicitudes de cambio se realizan a través del mail publicado en la página de Contacto para Compras, <span id="dots">...</span><span id="more">Consultas y Reclamos del SHOP Online, adonde se deberá especificar el producto elegido para el cambio y el motivo. Deben ser efectuadas hasta 15 (quince) días corridos, contados a partir de la fecha de recepción del pedido. Las solicitudes recibidas después de este plazo no serán aceptadas.</span></p>
                  <a onclick="myFunction()" id="myBtn">Ver más</a>
                </div>

                <div class="card-body ask col-xs-12 col-md-6 col-lg-6">
                  <h5 class="card-title icon-g"><img src="img/question.png" alt=""></h5>
                  <h6 class="card-subtitle mb-2 text-muted question">Es seguro utilizar mi tarjeta de crédito en el shop on line?</h6>
                  <p class="card-text answer">Es nuestro interés conformar una operación segura por ello aplicamos un sistema de seguridad <span id="dots">...</span><span id="more">por el cual se encriptan los datos aportados a la plataforma evitando su uso irregular</span></p>
                  <a onclick="myFunction()" id="myBtn">Ver más</a>
                </div>
            </div>
            </div>


                <div class="pie">
                  <hr class="lineh-g" style="color: grey;" />

                  <h2 class="endfaqs">NO ENCONTRASTE LO QUE BUSCABAS?</h2>
                  <button type="button" class="button-g">CONTACTATE CON NOSOTROS</button>
                </div>

    </main>
  <?php require 'footer.php';?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>