<?php
$id=$_GET['id'];
require_once "conexion.php";
require_once "funciones.php";



$obj=new funcion();
$obj->EliminarDatos($id);

echo'<script type="text/javascript"> alert("DATO ELIMINADO")</script>';
echo "<script> window.location.href = 'http://localhost/trabajo_miguel/CRUD_POO/';</script>";


?>