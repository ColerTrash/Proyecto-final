<?php

$fecha_actual = date("Y-m-d");

$fecha_Restar = date("Y-m-d",strtotime($fecha_actual."-30 days"));

include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../fullcalendar-5.11.0/lib/main.min.css">
    <script src="../fullcalendar-5.11.0/lib/main.min.js"></script>
    <script src="../fullcalendar-5.11.0/lib/locales/es.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '<?=$fecha_actual?>',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
    }); 

    calendar.render();
  });

</script>
</head>
<style>
</style>
<body>
<div class="container">
    <table class="table table-striped">
      <thead>
          <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Ultima actividad</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Editar</th>
              <th>Eliminar</th>
          </tr>
      </thead>
      <tbody>
          <?php
    
            $sql = "SELECT * from cliente where Ult_actividad<date_add(current_date(),interval -30 day)";
    
            $result = mysqli_query($cone,$sql);
    
            while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?=$mostrar['id_cliente'] ?></td>
                    <td><?=$mostrar['Nombre'] ?></td>
                    <td><?=$mostrar['Correo'] ?></td>
                    <td><?=$mostrar['Ult_Actividad'] ?></td>
                    <td><?=$mostrar['telefono'] ?></td>
                    <td><?=$mostrar['Direccion'] ?></td>
                    <td><a href="actualizar.php?id=<?= $mostrar['id_cliente']?>"><button type="button" class="btn btn-primary">Editar</button></a></td>
                    <td><a href="eliminar.php?id=<?=$mostrar['id_cliente']?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                </tr>
            <?php
                }
            ?>
      </tbody>
    </table>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col-6"><div id='calendar'></div></div>
        <div class="col"></div>
    </div>
    
</div>

</body>

</html>