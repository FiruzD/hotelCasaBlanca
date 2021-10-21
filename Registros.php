<?php
include("conex_db.php");

if ($conexion) {
    echo "conexion correcta";
}else {
    echo "ocurrio un error";
}


if  (

    isset($_POST['name'])&&
    isset($_POST['apellido1'])&&
    isset($_POST['apellido2'])&&
    isset($_POST['TipoD'])&&
    isset($_POST['NumeroD'])&&

    isset($_POST['correo'])&&
    isset($_POST['phone'])&&
    isset($_POST['street'])&&
    isset($_POST['FechNac'])&&
    isset($_POST['city'])&&
    isset($_POST['country'])&&
    isset($_POST['post-code'])&&

    isset($_POST['arrive'])&&
    isset($_POST['depart'])&&
    isset($_POST['cant'])&&
    isset($_POST['habitacion'])&&
    isset($_POST['TipoHab'])&&
    isset($_POST['comments'])

){

    $conexion->query("INSERT INTO 
    persona(
        cPerNombre,
        cPerApePat,
        cPerApeMat,
        cPerTipoDocument,
        cPerNumDocument
        ) 
        VALUES (
            '".$_POST["name"]."',
            '".$_POST["apellido1"]."',
            '".$_POST["apellido2"]."',
            '".$_POST["TipoD"]."',
            '".$_POST["NumeroD"]."',
        )
    ");  

    $conexion->query("INSERT INTO 
    cliente(
        cCliEmail,
        cCliTelefono,
        cCliDireccion,
        dCliFechaNac,
        cCliCiudad,
        cCliCodigoPostal,
        cCliPais,
        nPerCodigo
        ) 
        VALUES (
            '".$_POST["correo"]."',
            '".$_POST["phone"]."',
            '".$_POST["street"]."',
            '".$_POST["FechNac"]."',
            '".$_POST["city"]."',
            '".$_POST["post-code"]."',
            '".$_POST["country"]."',
            ".$conexion->insert_id."
        )
    ");
    
    $conexion->query("INSERT INTO 
    reservacion(
        dResFechaLlegada,
        dResFechaSalida,
        nResCantPersonas,
        cResHabitaciones,
        cResTipoHabitacion,
        cResComentarios,
        cCliCodigo
        ) 
        VALUES (
            '".$_POST["arrive"]."',
            '".$_POST["depart"]."',
            ".$_POST["cant"].",
            '".$_POST["habitacion"]."',
            '".$_POST["TipoHab"]."',
            '".$_POST["comments"]."',
            ".$conexion->insert_id."
        )
    ");

}else{
    ?>
    <h3 class="bad">¡Por favor, completa el registro! </h3>
    <?php
}

?>

