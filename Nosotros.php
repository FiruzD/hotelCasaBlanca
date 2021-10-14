<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-2″>
    <title>Casablanca Hotel</title>
    <!--<embed src="music/AmbientalHotel.mp3" autoplay= "true" loop="true" volume="50" width="0" height="0">-->
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href = "https://file.myfontastic.com/AkuhujgusLihXceob9pNxk/icons.css" rel = "stylesheet">
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
            <p class="copy">Convertimos tus sueños en una realidad</p>
            
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





  
    <section class="about-us" >
        <div class="contenedor1" id="Nosotros">
          
            <h2  align="center" class="titulo">Quienes Somos</h2>
            <div class="contenedor-articulo">
                <div class="articulo" data-aos="zoom-in-right">
                  
                    <h3>Mision</h3>
                    <p align="center column__txt">
                        Ser la mejor cadena hotelera en cada mercado en
                        que estemos presentes, con la más extensa líne a 
                        de hoteles de tres a cinco estrellas; mantener una 
                        filosofía de excelencia en servicio al cliente y 
                        hacer uso en todo momento de nuestras incomparables 
                        ventajas competitivas para poder proporcionar a nuestros
                        huéspedes el más elevado valor percibido. Para lograr 
                        esto, contaremos con una visión compartida y el mejor y 
                        más altamente motivado recurso humano, siempre aprovechando 
                        el potencial creativo de todos nuestros colaboradores.
                        </p>

                    
                   
                </div>
                <div class="articulo column__txt" data-aos="zoom-in-right">
                    <h3>Vision</h3>
                    <p style=”text-align: justify;” >Mantenernos siempre 5 años adelante de la competencia,
                        mediante la innovación constante en las operaciones,
                        infraestructura, programas para el desarrollo de nuestro
                        recurso humano y el servicio personalizado ofrecido en
                        nuestros hoteles, obteniendo con ello un mejoramiento en el
                        flujo neto de los accionistas.</p>
                    
                </div>
               
               
            </div>
        </div>
    </section>
   
        
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


