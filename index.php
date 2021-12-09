


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->

    <link rel="stylesheet" href= "ESTILOS/.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Principal</title>
  </head>
  <body>
   <br>
   <br>
   <br>
<div class="forp">
  <div class="container-sm">
      <br>
    <h2 class="T">NUEVO REGISTRO</h2>
    <br>
    <form class="row-12"  action="CLASES/insertar.php" method="POST">
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="id_estudiante" placeholder="numero de identificacion">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="Nom" placeholder="primer y segundo nombre">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="Ape" placeholder="primer y segundo apellido">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="dir" placeholder="direccion">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="tel" placeholder="telefono">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="acu" placeholder="acudiente">
        </div>
        <br>
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="gru" placeholder="curso">
        </div>
        <br>
<br>
      
        <div class="col-12">
            <input class="btn btn-primary d-block mx-auto" style="font-size: 150%;" type="submit" value="Enviar Datos">
        </div>
        <br>
        <br>
    </form>
    
    </div>
    </div>
<br>

    <div class="fora">

    <div class="container-sm">
    <h2 class="T">Actulizar registro</h2>
    <br>
    <form class="row-12"  action="CLASES/actulizar.php" method="POST">
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="edita" placeholder="numero de identificacion">
        </div>
       
<br>
           
        <div class="col-12">
            <input class="btn btn-primary d-block mx-auto" style="font-size: 120%; " type="submit" value="Buscar Datos">
        </div>
        <br>
        <br>
    </form>
    </div>
    </div>





<div class="fore">
    <div class="container-sm">
    <h2 class="T" >Borrar registro</h2>
    <br>
    <form class="row-12"  action="CLASES/eliminar.php" method="POST">
        <div class="col-12">
            <input class="form-control" style="text-transform: uppercase" type="text" required  name="borra" placeholder="numero de identificacion">
        </div>
       
<br>
           
        <div class="col-12">
            <input class="btn btn-primary d-block mx-auto" style="font-size: 120%;" type="submit" value="Borrar Datos">
        </div>
        <br>
        <br>
    </form>

    </div>
    </div>



<div class=tabla>

<table   class="table table-Light table-striped" style="text-transform: uppercase">
		<thead>
			<tr>
                <th> NUMERO DE IDENTIFICACION </th>
				<th> NOMBRES </th>
				<th> APELLIDOS </th>
                <th> DIRECCION </th>
                <th> TELEFONO</th>
                <th> ACUDIENTE</th>
                <th> CURSO</th>
                <th> ACTULIZAR</th>
                <th> ELIMINAR</th>
                
			</tr>
		</thead>
	<tbody>


    <?php



require 'CLASES/funciones.php';
require 'CLASES/conexion.php';



$obj =new funcion();
$sql=" SELECT id_estudiante, Nombre_estudiante, Apellido_estud, direccion_est, telefono_est, acudiente, grupo_est  FROM estudiantes_col";
$datos=$obj->MostrarDatos($sql);


foreach ($datos as $fila){

?>

<tr>

<td><?php echo $fila['id_estudiante'];?></td>
<td><?php echo $fila['Nombre_estudiante'];?></td>
<td><?php echo $fila['Apellido_estud'];?></td>
<td><?php echo $fila['direccion_est'];?></td>
<td><?php echo $fila['telefono_est'];?></td>
<td><?php echo $fila['acudiente'];?></td>
<td><?php echo $fila['grupo_est'];?></td>
<td><a href="CLASES/actulizarbtn.php?id=<?php echo $fila['id_estudiante'];?>" ><button type="button" class="btn btn-success">Actulizar</button></a></td>
<td><a href="CLASES/eliminarbtn.php?id=<?php echo $fila['id_estudiante'];?>" ><button type="button" class="btn btn-danger">Eliminar</button></a></td>



</tr>

<?php
}
?>


</div>







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








