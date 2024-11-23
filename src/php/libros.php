<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="../../src/css/main.css">
    <script src='../../src/javascript/main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- header -->

    <header>
        <div class="icon">
            <img src="../../img/Imagen-2-16eaad86.png" alt="">
        </div>
        <div class="botones">
            <li class="list-items">
                <a href="../../index.html" id="inicio">Inicio</a>
            </li>
            <li class="list-items">
                <a href="#" id="perfiles">Perfiles <i class="fa-solid fa-arrow-down"></i></a>
                <ul id="dropdownul" class="list-items">
                    <a href="autores.php" id="tablas">Autores</a>
                    <a href="libros.php" id="tablas">Libros y autores</a>
                </ul>
            </li>
            <li class="list-items">
                <a href="contacto.php" id="contacto">Contacto</a>
            </li>
                
            <li>
                <a href="#" id="unirme">Unirme</a>
            </li>
        </div>
    </header>

    <!-- main -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre del libro</th>
                <th scope="col">Fecha del lanzamiento</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Autor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select l.nombrelibro, l.fechalanzamiento, l.descripcion, a.nombre from libros l inner join autor a on a.idautor = l.idautor;";
                $result = mysqli_query($cone,$sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?=$mostrar['nombrelibro'] ?></td>
                        <td><?=$mostrar['fechalanzamiento'] ?></td>
                        <td><?=$mostrar['descripcion'] ?></td>
                        <td><?=$mostrar['nombre'] ?></td>
                    <tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <script src="https://kit.fontawesome.com/7fbfd9b43f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>