<?php
include("conex_db.php");

if  (
    isset($_POST['txtNombre'])&&
    isset($_POST['txtApe1'])&&
    isset($_POST['txtApe2'])&&

    isset($_POST['txtCellphone'])&&
    isset($_POST['txtGmail'])&&
    isset($_POST['txtObservaciones'])
){  
    $conexion->query("INSERT INTO
    persona(
            cPerNombre,
            cPerApePat,
            cPerApeMat
            )
            VALUES (
                '".$_POST["txtNombre"]."',
                '".$_POST["txtApe1"]."',
                '".$_POST["txtApe2"]."'
            )
        ");  
        
        $conexion->query("INSERT INTO 
        consulta(
            cConTelefono,
            cConEmail, 
            cConDescripcion,
            nPerCodigo
            ) 
            VALUES (
                '".$_POST["txtCellphone"]."',
                '".$_POST["txtGmail"]."',
                '".$_POST["txtObservaciones"]."',
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

