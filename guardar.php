<?php
session_start();
require 'conexion.php';

if (isset($_POST["btnGuardar"])){
    $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
    $edad = mysqli_real_escape_string($conexion,$_POST['edad']);
    $especialidad = mysqli_real_escape_string($conexion,$_POST['especialidad']);
    $pais = mysqli_real_escape_string($conexion,$_POST['pais']);


    $sql = "INSERT INTO medicos (nombre,apellido,edad,especialidad,id_pais) values
    ('$nombre', '$apellido', '$edad', '$especialidad', '$pais')";
   
    $res = $conexion->query($sql);
    if ($res){
        $_SESSION['mensaje'] = "Medico registrado correctamente";
        $_SESSION['error'] = false;
     
    }else{
        $_SESSION['mensaje'] = "No se logro registrar medico correctamente";
        $_SESSION['error'] = true;
    }
    header ("location:crear_medicos.php");
        exit;
    }




?>