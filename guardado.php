<?php

include 'db.php';
  $respuesta = array(
    'error' => true,
    'data' => null
  );
  $estudiante = $_POST['estudiante'];
  $libro = $_POST['libro'];
  $dias = $_POST['dias'];

  if(empty($estudiante) || empty($libro) || empty($dias)){
    //No haga nada
    $respuesta['data'] = 'Error al guardar';
  }else{

    $insert = mysqli_query($conexion,'INSERT INTO prestamo (estudiante_id, libro_isbn, dias_prestamo, fecha_prestamo_inicio) VALUES ('. $estudiante .', '. $libro .','. $dias .',"'. date('Y-m-d') .'")');
    
    /* $data = array();
    while ($row = mysqli_fetch_assoc($select)){
      $data[] = $row;
    } */

    $respuesta['error'] = false;
    $respuesta['data'] = 'Guardado existoso';
  }
  

  
  echo json_encode($respuesta);

?>