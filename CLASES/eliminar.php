<?php

require "conexion.php";
require "funciones.php";

$borrar=$_POST['borra'];
echo "$borrar";

$obj= new funcion();
if ($obj->EliminarDatos($borrar)==1){
echo'<script type="text/javascript"> alert("DATO ELIMINADO")</script>';
echo "<script> window.location.href = 'http://localhost/trabajo_miguel/CRUD_POO/';</script>";



}
else{

 echo'<script type="text/javascript"> alert("ERROR DATO NO EliminadoDO</script>';
 echo "<script> window.location.href = 'http://localhost/trabajo_miguel/CRUD_POO/';</script>";


}
?>