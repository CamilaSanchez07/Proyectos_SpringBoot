<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camila Sánchez</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DEL EMPLEADO</h2>

                <div class="enlace">
                    <a href="index.php">Regresar al menú</a>
                </div>
            </section>
        </section>

        <form class="form_contact" method="POST">
            <h2>Registrate!</h2>
            <div class="user_info">
                <div class="a">
                    <label for="cedula">Cédula *</label>
                    <input type="number" name="cedula">
                </div>

                <div class="b">
                    <label for="nombre">Nombres *</label>
                    <input type="text" name="nombre">
                </div>

                <div class="c">
                    <label for="apellidoP">Apellido Paterno</label>
                    <input type="text" name="apellidoP">
                </div>

                <div class="d">
                    <label for="apellidoM">Apellido Materno</label>
                    <input type="text" name="apellidoM">
                </div>

                <div class="e">
                    <label for="telefono">Telefono / Celular</label>
                    <input type="tel" name="telefono">
                </div>

                <div class="f">
                    <label for="depto">Departamento *</label>
                    <br>
                    <select name="num_depto" class="g">
                        <option selected value="">--Seleccione--</option>
                        <?php
                            include("conexion.php");
                            $sql = "SELECT * FROM departamento";
                            $query = mysqli_query($condb, $sql);

                            while ($row = mysqli_fetch_array($query)) {
                                $iddepto = $row['num_depto'];
                                $nomdepto = $row['nom_depto'];

                        ?>
                            <option value="<?php echo $iddepto ?> "> <?php echo $nomdepto ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <input class="h" type="submit" name="Registrar">
            </div>
            <?php
                include("empleado.php");
            ?>
        </form>

    </section>

</body>

</html>