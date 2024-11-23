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
    <form action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
            <label for="inputName">Nombre</label>
                <input type="text" class="form-control" placeholder="First name" name="Nombre">
            </div>
            <div class="col">
                <label for="inputLastname">Apellido</label>
                <input type="text" class="form-control" placeholder="Last name" name="Apellido">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="Email">
            </div>
            <div class="col">
                <label for="inputAdress">Direccion</label>
                <input type="text" class="form-control" placeholder="Adress" name="Direccion">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="inputdescripcion">Descripcion/queja:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Descripcion"></textarea>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" style="margin-top: 10px"></input>
    </form>
    </div>

    <script src="https://kit.fontawesome.com/7fbfd9b43f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>