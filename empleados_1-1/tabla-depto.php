<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Camila Sánchez</title>
    
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <main role="main" class="form_wrap">
        <div class="container">

            <div class="card">
            <button class="enmenu"> <a href="index.php">Volver</a> </button>
                <h2 class="card-header"><strong>Consulta de Empleados</strong></h2>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">ApellidoP</th>
                                <th scope="col">ApellidoM</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Departamento</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            include("conexion.php");
                            $sql = "SELECT * FROM empleado";
                            $query = mysqli_query($condb, $sql);

                            while ($row = mysqli_fetch_array($query)) {
                                $cedula = $row['cedula'];
                                $nombre = $row['nombre'];
                                $apellidoP = $row['apellidoP'];
                                $apellidoM = $row['apellidoM'];
                                $telefono = $row['telefono'];
                                $num_depto = $row['num_depto'];
                            
                        ?>
                        <tr>
                                <td> <?php echo $cedula; ?></td>
                                <td> <?php echo $nombre; ?></td>
                                <td> <?php echo $apellidoP; ?></td>
                                <td> <?php echo $apellidoM; ?></td>
                                <td> <?php echo $telefono; ?></td>
                                <td> <?php echo $num_depto; ?></td>

                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
</body>

</html>