<?php
require 'funciones.php';
require 'conexion.php';

$idAc=$_POST['edita'];


$obj =new funcion();
$sql=" SELECT id_estudiante, Nombre_estudiante, Apellido_estud, direccion_est, telefono_est, acudiente, grupo_est  FROM estudiantes_col WHERE id_estudiante='$idAc'";
$datos=$obj->MostrarDatos($sql);

foreach ($datos as $fila){


    echo '<br>';
"<tr>";
"<td>".$fila['id_estudiante']."</td>";
"<td>".$fila['Nombre_estudiante']."</td>";
"<td>".$fila['Apellido_estud']."</td>";
"<td>".$fila['direccion_est']."</td>";
"<td>".$fila['telefono_est']."</td>";
"<td>".$fila['acudiente']."</td>";
"<td>".$fila['grupo_est']."</td>";
   
"</tr>";

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->

  <link rel="stylesheet" href= "http://localhost/trabajo_miguel/CRUD_POO/ESTILOS/.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Actulizar</title>
  </head>
  <body>
   <br>
   <br>
   <br>
   <br>
<div class="forp">
  <div class="container-sm">
      <br>
    <h2  class="T">ACTULIZAR REGISTRO</h2>
    <br>
    <form class="row-12"  action="editar.php" method="POST">
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" readonly  name="id_estudiante" value="<?php echo $fila['id_estudiante']; ?>" placeholder="numero de identificacion">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="Nom" value="<?php echo $fila['Nombre_estudiante']; ?>"  placeholder="primer y segundo nombre">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="Ape" value="<?php echo $fila['Apellido_estud']; ?>"  placeholder="primer y segundo apellido">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="dir" value="<?php echo $fila['direccion_est']; ?>"  placeholder="direccion">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="tel" value="<?php echo $fila['telefono_est']; ?>"  placeholder="telefono">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="acu" value="<?php echo $fila['acudiente']; ?>" placeholder="acudiente">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="gru" value="<?php echo $fila['grupo_est']; ?>"  placeholder="curso">
        </div>
        <br>
<br>
<br>
           
        <div class="col-12">
            <input class="btn btn-primary d-block mx-auto" style="font-size: 150%;" type="submit" value="Actulizar">
        </div>
        <br>
        <br>
    </form>












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->






  </body>
</html>




