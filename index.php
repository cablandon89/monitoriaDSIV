<?php

    include 'db.php';
    $select = mysqli_query($conexion,'SELECT * FROM prestamo');
    //mysqli_query($conexion,'INSERT (id,nombre,codigo) into carreta VALUES ('. $id .','. $nombre .','. $codigo .')');

    /* while ($row = mysqli_fetch_array($select)){
      echo $row['codigo'] .' '. $row['nombre'];
      echo '<br>';
    } */

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $data = array();
    while ($row = mysqli_fetch_assoc($select)){
      $data[] = $row;
    }
    echo json_encode($data);
  ?>
</body>
</html>