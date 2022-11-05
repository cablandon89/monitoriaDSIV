<?php

    include 'db.php';
    $select = mysqli_query($conexion,'SELECT * FROM prestamo');
    //mysqli_query($conexion,'INSERT (id,nombre,codigo) into carreta VALUES ('. $id .','. $nombre .','. $codigo .')');

    /* while ($row = mysqli_fetch_array($select)){
      echo $row['codigo'] .' '. $row['nombre'];
      echo '<br>';
    } */

    $data = array();
    while ($row = mysqli_fetch_assoc($select)){
      $data[] = $row;
    }
    echo json_encode($data);

?>