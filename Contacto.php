<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-2″>
    <title>Casablanca Hotel</title>
    <!--<embed src="music/AmbientalHotel.mp3" autoplay= "true" loop="true" volume="10" width="0" height="0">-->
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href = "https://file.myfontastic.com/AkuhujgusLihXceob9pNxk/icons.css" rel = "stylesheet">
    <link rel="stylesheet" href="css/EstiloContactanos.css"/>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/formulario.js" ></script>
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

    <section>                               
            <div class="row">
                <div class="interior">  
                    <div class="col-12">
                        <div class="col-6">
                            <h1 class="Contactanos">Contáctanos</h1>
                            <p class="descripcion">HOTEL CASA BLANCA agradece su confianza y preferencia. Si tienes alguna consulta o inquietud sobre algunos de nuestros servicios, no dudes en comunicarte con nosotros a través de este formulario y te responderemos a la brevedad posible.</p>
                            <p class="informes">No dudes en comunicarte con nosotros a informes@casablancahotel.com.pe</p>
                        </div> 
                        <div class="col-6">

                            <form  method="POST" name="formulario" id="formulario">
                                <div>                                   
                                    <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese nombre " autofocus />
                                </div>
                                <div>                                   
                                    <input type="text" name="txtApe1" id="txtApe1" placeholder="Ingrese primer apellido" autofocus />
                                </div>
                                <div>                                   
                                    <input type="text" name="txtApe2" id="txtApe2" placeholder="Ingrese segundo apellido" autofocus />
                                </div>
                                <div>                                   
                                    <input type="number" name="txtCellphone" id="txtCellphone" placeholder="Teléfono / Celular" autofocus/>
                                </div>
                                <div>                                   
                                    <input type="text" name="txtGmail" id="txtGmail" placeholder="E-mail" autofocus/>
                                </div>                          
                                <div>                                   
                                    <textarea name="txtObservaciones" rows="5" cols="40" placeholder="Describe un comentario" autofocus></textarea>
                                </div>          
                                <div>
                                    <input type="submit" value="Enviar" name="btnEnviar" id="btnEnviar" />
                                </div>
                            </form> 
                        </div> 
                        <!-- se incluye el archivo de la consulta o contacto del cliente -->
                        <?php
                            include("consulta.php");
                        ?>                     
                    </div>  
                </div>  
            </div>

            <div class="row">                               
                <div class="caja_a">
                    <p>50 AÑOS DESARROLLANDO PROYECTOS ARQUITECTÓNICOS INTEGRALES.</p>
                    <h2>CREAMOS ESPACIOS<br>PARA EXPERIENCIAS<br>UNICAS</h4>
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