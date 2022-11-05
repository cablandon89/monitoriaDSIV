<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);


  $servidor = 'localhost';
  $usuario = 'root';
  $pass = 'af32647c7a';
  $basededatos = 'biblioteca';


  $conexion = mysqli_connect($servidor,$usuario,$pass,$basededatos);

  if(!$conexion){
    echo 'No se pudo conectar a la base de datos';
    die();
  }

  //var_dump($conexion)
?>