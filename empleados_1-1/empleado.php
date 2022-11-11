<?php
include ("conexion.php");

if(isset($_POST['Registrar'])) {
    if (strlen($_POST['cedula']) >=1
        && strlen($_POST['nombre']) >=1
        && strlen($_POST['apellidoP']) >=1
        && strlen($_POST['apellidoM']) >=1
        && strlen($_POST['telefono']) >=1
        && strlen($_POST['num_depto']) ) {

        $cedula = trim($_POST['cedula']);
        $nombre = trim($_POST['nombre']);
        $apellidoP = trim($_POST['apellidoP']);
        $apellidoM = trim($_POST['apellidoM']);
        $telefono = trim($_POST['telefono']);
        $num_depto = trim($_POST['num_depto']);

        $consulta = "INSERT INTO empleado(cedula, nombre, apellidoP, apellidoM, telefono, num_depto) VALUES ('$cedula','$nombre','$apellidoP','$apellidoM','$telefono','$num_depto')";
        $res = mysqli_query($condb, $consulta);

        if ($res) {
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