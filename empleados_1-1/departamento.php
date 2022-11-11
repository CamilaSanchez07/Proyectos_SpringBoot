<?php
include("conexion.php");

if(isset($_POST['Registrar'])) {
    if(strlen($_POST['num_depto']) >=1
    && strlen($_POST['nombre']) >=1 ) {
    
        $nombre = trim($_POST['nombre']);
        $num_depto = trim($_POST['num_depto']);

        $consulta = "INSERT INTO departamento(num_depto,nom_depto) VALUES ('$num_depto','$nombre')";
        $res = mysqli_query($condb, $consulta);

        if($res) {
            ?>
            <h3 class="exito">Registrado correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Por favor llene los campos faltantes!</h3>
            <?php
        }
    }
}