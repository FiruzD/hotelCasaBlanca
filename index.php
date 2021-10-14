<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Casablanca Hotel</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href = "https://file.myfontastic.com/AkuhujgusLihXceob9pNxk/icons.css" rel = "stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/686bbeaab20b4384be12f90775c11a38d8524438d15c4f45bba2b660be486299.js"></script> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
     <link rel="stylesheet" href="css/styleshabitaciones.css">
</head>

</head>
<body>
    <header class="header" id="inicio">
        <img class="hamburguer" src="img/hamburguesa.svg" alt="">
        <nav class="menu-navegacion">
                <a href="index.php">Inicio</a>
                <a href ="index.php#habit">Habitaciones</a>
                <a href="Servicio.php#Ser">Servicio</a>
                <a href="galeria.php#galeria">Portafolio</a>
                <a href="Nosotros.php#Nosotros">Nosotros</a>
                <a href="Contacto.php">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo"> hotel casa blanca</h1>
            <p class="copy">Convertimos tus sueños en  realidad</p>
            
        </div>

    </header>
   

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="218812995380898"
  logged_in_greeting="Hola que tal  En que te puedo Ayudar?"
  logged_out_greeting="Hola que tal  En que te puedo Ayudar?">
      </div>

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">El mejor Hotel de la Ciudad de la Amistad</h2>
                <p class="main__txt">Comodidad, atención y diversión al alcance de todos</p>
            </div>
        </section>
        <div class="imagen-light">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>

        <section class="group main__about__video"> 
            <div class="container container--flex">
            </div>
        </section>


        
        <section class="group main__about__description"> 
            <div class="container container--flex" class="container container--flex">
                <div class="column column--50">
                    <img src="img/ChicaCasaBlanca.jpg" alt="">
                </div>
                <div class="column column--50">
                    <h3 class="column__title">Bienvenido a nuestro Hotel Casa Blanca</h3>
                    <p class="column__txt">Estimado Sr./Sra: En nombre del equipo humano del Hotel Conde Ansúrez, nos gustaría darle la más sincera bienvenida a nuestro establecimiento, así como agradecerle la confianza que deposita en nosotros.
                    Cada año, aproximadamente, más de 300.000 turistas eligen la ciudad de la Amistad por sus nobles características, cultura, tradición, infraestructuras y propuesta gastronómica; y nos es muy grato poder ofrecerles nuestra propuesta de alojamiento y restauración para poder disfrutar y vivir la experiencia en nuestra heroica ciudad.
                    Nos ponemos a su disposición para hacer, que su estancia, sea lo más agradable posible.
                    Una vez más, gracias por confiar en nosotros y en el Hotel Casa Blanca.</p>
                    <a href="contacto.html" class="btn btn--contac">Contact</a>
                </div>
            </div>
        </section>
<section class="content whitebg" id="habit">
<h2 class="subtitulohabitaciones">Nuestras Habitaciones</h2>
  <div  class="container" style="padding-top:0">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod" url="#" number="1">
      <div class="hover-offer ehover1"><img class="img-responsive" src="
        img/simple1.jpg" alt="Simple" />
        <div class="offer-content">
          <div class="no-ribbon"></div>
          <figcaption> <span class="flights-icon">(</span>
            <h4> Habitación Simple</h4>
            <p class="detail">1 Cama</p>
            <p class="price-offer"><span>Desde</span> 45 $*</p>
            
            <div> <a href="reserva.php" class="button2">Reserva ya</a></div>
          </figcaption>
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod" url="#" number="2">
      <div class="hover-offer ehover1"><img class="img-responsive" src="img/doble2.jpg" alt="Doble" />
        <div class="offer-content">
          <div class="ribbon orange">Promo exclusiva</div>
          <figcaption> <span class="flights-icon">Q</span>
            <h4>Habitacion Con cama Amplia </h4>
            <p class="detail"> &#9733;&#9733;&#9733;</p>
            <p class="price-offer"><span>Desde</span> 80 $*</p>
            <div> <a href="reserva.php" class="button2">Reserva ya</a></div>
          </figcaption>
        </div>
      </div>
    </div>
    
   
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod" url="#" number="3">
      <div class="hover-offer ehover1"><img class="img-responsive" src="img/doblecama1.jpg" alt="Doble" />
        <div class="offer-content"> 
          <figcaption> <span class="flights-icon">Q</span>
            <h4>Habitacion Doble Cama simple </h4>
            <p class="detail"> &#9733;&#9733;&#9733;</p>
            <p class="price-offer"><span>Desde</span> 120 $*</p>
            <div> <a href="reserva.php" class="button2">Reserva ya</a></div>
          </figcaption>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod tmñ" url="#" number="4">
      <div class="hover-offer ehover1"><img class="img-responsive" src="img/family.jpg" alt="family" />
        <div class="offer-content">
          <div class="no-ribbon"></div>
          <figcaption> <span class="flights-icon">U</span>
            <h4>Habitacion Familiar</h4>
            <p class="detail">2 Camas + baño &#9733;&#9733;&#9733;</p>
            <p class="price-offer"><span>Desde</span> 150 €*</p>
            <div> <a href="reserva.php" class="button2">Reserva ya</a></div>
          </figcaption>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod" url="#" number="5">
      <div class="hover-offer ehover1">
        <img class="img-responsive" src="img/matri.jpg" alt="matri" />
        <div class="offer-content">
          <div class="ribbon orange">Top </div>
          <figcaption> <span class="flights-icon">(</span>
            <h4>Habitacion Matrimonial</h4>
            <p class="detail">Cama Super Amplia + Baño</p>
            <p class="price-offer"><span>Desde</span> 300 $*</p>
            <div> <a href="reserva.php" class="button2">Reserva ya</a></div>
          </figcaption>
        </div>
      </div>
    </div>
</section>
    </main>
    <footer class="main-footer" id="contacto" >
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">¿Por qué visitarnos?</h2>
                    <p class="column__txt">Somos una de las mejores cadenas hoteleras de chiclayo, enfocada en proporcionar a nuestros huéspedes una experiencia de viaje. Integramos las particularidades de cada destino donde nos encontramos desde arquitectura, decoración, gastronomía, actividades y música, ofreciendo así a nuestros visitantes una experiencia de viaje única.</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Contáctanos</h2>
                    <p class="column__txt"><a href="" class="icon-gps"></a>Calle Manuel Arteaga N°403 Chiclayo, Perú</p>
                    <p class="column__txt"><a href="" class="icon-telephone"></a>Teléfono 999-999-999</p>
                    <p class="column__txt"><a href="" class="icon-mail"></a>reservas@casablancahotel.com.pe</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Siguenos en nuestras redes</h2>
                    <p class="column__txt"><a href="" class="icon-facebook"></a>Casablanca Hotel</p>
                    <p class="column__txt"><a href="" class="icon-twitter"></a>@CasablancaHotel</p>
                    <p class="column__txt"><a href="" class="icon-youtube"></a>Hotel CasaBlanca Chiclayo</p>
                </div>
                <p class="copy">©2021 Hotel Casa Blanca | Universidad Señor de Sipán | Ingeniería de Sistemas</p>
            </div>
        </footer>
    <script src="js/menu.js"></script>   
    <script src="js/lightbox.js"></script> 
</body>
</html>
