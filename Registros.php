<?php
include("conex_db.php");

if  (
    isset($_POST['name'])&&
    isset($_POST['apellido1'])&&
    isset($_POST['apellido2'])&&

    isset($_POST['TipoD'])&&
    isset($_POST['NumeroD'])&&

    isset($_POST['email'])&&
    isset($_POST['phone'])&&
    isset($_POST['street'])&&
    isset($_POST['FechNac'])&&
    isset($_POST['city'])&&
    isset($_POST['post-code"'])&&
    isset($_POST['country'])&&

    isset($_POST['arrive'])&&
    isset($_POST['depart'])&&
    isset($_POST['lista'])&&
    isset($_POST['habitacion'])&&
    isset($_POST['TipoHab'])&&
    isset($_POST['comments'])
){  
    $conexion->query("INSERT INTO
    persona(
            cPerNombre,
            cPerApePat,
            cPerApeMat
            )
            VALUES (
                '".$_POST["name"]."',
                '".$_POST["apellido1"]."',
                '".$_POST["apellido2"]."'
            )
        ");  
        
        $conexion->query("INSERT INTO 
        tipopersona(
            cTipDocumento,
            cTipNumDocumento, 
            nPerCodigo
            ) 
            VALUES (
                '".$_POST["TipoD"]."',
                '".$_POST["NumeroD"]."',
                ".$conexion->insert_id."
            )
        ");

        $conexion->query("INSERT INTO 
        cliente(
            cCliEmail,
            cCliTelefono,
            cCliDireccion,
            dCliFechaNac,
            cCliCiudad,
            cCliPais,
            cCliCodigoPostal, 
            nPerCodigo
            ) 
            VALUES (
                '".$_POST["email"]."',
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
            nResHabitaciones,
            cResTipoHabitacion,
            cResComentarios,
            dResFechaRegistro, 
            nPerCodigo
            ) 
            VALUES (
                '".$_POST["arrive"]."',
                '".$_POST["depart"]."',
                ".$_POST["lista"].",
                '".$_POST["habitacion"]."',
                '".$_POST["TipoHab"]."',
                '".$_POST["comments"]."',
                '".$dResFechaRegistro=date("d/m/y")."'
                ".$conexion->insert_id."
            )
        ");


        if($conexion) {
            ?>
                <h3 class="ok">¡Te has registrado correctamente! </h3>
            <?php
        }else{
            ?>
            <h3 class="bad">¡Ups ha ocurrido un error! </h3>
            <?php
        }   
}else{
    ?>
    <h3 class="bad">¡Por favor, completa el registro! </h3>
    <?php
}
?>