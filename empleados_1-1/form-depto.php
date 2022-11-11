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

        <section class="cantact_info infocc">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>NUEVOS<br>DEPARTAMENTOS</h2>

                <div class="enlace">
                    <a href="index.php">Regresar al menú</a>
                </div>
            </section>
        </section>

        <form class="form_contact" method="POST">
            <h2>Registra nuevos departamentos!</h2>
            <div class="depto">
                <div>
                    <label for="num_depto">Número del nuevo departamento *</label>
                    <input type="number" name="num_depto">
                </div>

                <div>
                    <label for="depto">Nombre del nuevo departamento *</label>
                    <input type="text" name="nombre">
                </div>

                <input type="submit" name="Registrar">
            </div>

            <?php
            include("departamento.php");
            ?>

        </form>

    </section>

</body>

</html>