<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Reserva</title>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'><link rel="stylesheet" href="css/reserva.css">

</head>
<body>

<form action="" method="POST">  
  <div 
   class="form-group">
    <h2 class="heading">hotel Casa Blanca</h2>

    <div class="controls">
      <input type="text" id="name" class="floatLabel" name="name">
      <label for="name">Nombre</label>
    </div>

    <div class="controls">
      <input type="text" id="apellido1" class="floatLabel" name="apellido1">
      <label for="name">Apellido Paterno</label>
    </div>

    <div class="controls">
      <input type="text" id="apellido2" class="floatLabel" name="apellido2">
      <label for="name">Apellido Materno</label>
    </div>

    <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="TipoD" class="floatLabel" name="TipoD">
            <label for="city">Tipo Documento</label>
          </div>         
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="NumeroD" class="floatLabel" name="NumeroD">
            <label for="post-code"> Número de Documento</label>
          </div>         
        </div>
      </div>

    <div class="controls">
      <input type="text" id="email" class="floatLabel" name="email">
      <label for="email">Email</label>
    </div>    

    <div class="controls">
      <input type="tel" id="phone" class="floatLabel" name="phone">
      <label for="phone">Telefono</label>
    </div>

    <div class="controls">
      <input type="text" id="street" class="floatLabel" name="street">
      <label for="street">Direccion</label>
    </div>

    <div class="controls">
        <input type="date" id="FechNac" class="floatLabel" name="FechNac" value="<?php echo date('Y-m-d'); ?>">
        <label for="FechNac" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Fecha de Nacimiento</label>
    </div> 

      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="city" class="floatLabel" name="city">
            <label for="city">Ciudad</label>
          </div>         
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="post-code" class="floatLabel" name="post-code">
            <label for="post-code"> Codigo Postal</label>
          </div>         
        </div>
      </div>

      <div class="controls">
        <input type="text" id="country" class="floatLabel" name="country">
        <label for="country">pais</label>
      </div>
  </div>
  <!--  detalles -->
  <div class="form-group">
    <h2 class="heading">detalles</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;llegada</label>
      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Salida</label>
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" name="lista">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
        <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;Personas</label>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel" name="habitacion">
        <option value="blank"></option>
        <option value="deluxe" selected>Con Baño</option>
        <option value="Zuri-zimmer">Sin Baño</option>
      </select>
      <label for="fruit">Habitaciones</label>
     </div>     
    </div>

    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel" name="TipoHab">
        <option value="blank"></option>
        <option value="single-bed">Simple</option>
        <option value="double-bed" selected>doble</option>
        <option value="single-bed">triple</option>
        <option value="double-bed" >Familiar</option>
         <option value="double-bed" >Matrimonial</option>
      </select>
      <label for="fruit">Tipo De Habitacion</label>
     </div>     
    </div>
      
     </div>
      <div class="grid">
        <p class="info-text">Describa sus necesidades, por ejemplo, camas supletorias, cunas para niños</p>
        <br>
        <div class="controls">
          <textarea name="comments" class="floatLabel" id="comments"></textarea>
          <label for="comments">Commentarios</label>
          </div>
            <button type="submit" value="Submit" name="insertar" class="col-1-4">Enviar</button>
            <a href="index.php" class="button">Volver</a>
            
      </div>  
  </div>
</form>

  <!-- se incluye el archivo de registro para las reservaciones-->
    <?php
      include("consulta.php");
    ?> 

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
<script src='https://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
<script src='https://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script><script  src="js/reserva.js"></script>

</body>
</html>
