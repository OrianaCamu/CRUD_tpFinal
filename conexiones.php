<?php
mysqli_report(MYSQLI_REPORT_OFF);

$conexion = @new mysqli ("localhost", "root", "","crudphp");

if($conexion->connect_error){
    die("no se logro conectar ".$conexion->connect_error);
}