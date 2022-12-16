<?php
session_start();
require "conexion.php";
?>



<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



  </head>

<div class="container">
          <?php
          if (isset($_SESSION['mensaje'])){
              if (!$_SESSION['error']){
                    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['mensaje'];?>
                    </div>
              <?php
              }else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['mensaje'];?>
                    </div>
              <?php
              }
              unset($_SESSION['mensaje']);
          }
          ?>




       <div class="row">
        <div class="col-md-12">
           <div class="card">
            <div class="card-header">
                <h4>
                    Lista de Profesionales
                    <a href="index.php" class="btn btn-success float-end">Agregar nuevo</a>
                </h4>
            </div>
               <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                           <th>ID</th>
                           <th>nombre</th>
                           <th>apellido</th>
                           <th>edad</th>
                           <th>especialidad</th>
                           <th>pais</th>
                           <th>acciones</th>
                        </tr>
                        <?php
                               $res= $conexion->query("SELECT * FROM `medicos`");
                               while ($fila = $res->fetch_object()){
                                ?>
                                 <tr>
                          <td><?php echo $fila->id; ?>/td>
                          <td><?php echo $fila->nombre; ?>/td>
                          <td><?php echo $fila->apellido; ?>/td>
                          <td><?php echo $fila->edad; ?></td>
                          <td><?php echo $fila->especialidad; ?>/td>
                          <td><?php echo $fila->pais; ?>/td>
                        </tr>
                              
                            <?php

                               }

                            ?>
                       
                      </thead>
                    </table>
               </div>
           </div>
        </div>
       </div>
     </div>

