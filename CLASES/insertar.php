<?php

require_once "conexion.php";
require_once "funciones.php";

$id_estudiante = $_POST['id_estudiante'];
$Nombre_estudiante=$_POST['Nom'];
$Apellido_estud=$_POST['Ape'];
$direccion_est=$_POST['dir'];
$telefono_est=$_POST['tel'];
$acudiente=$_POST['acu'];
$grupo_est=$_POST['gru'];


$datos =array($id_estudiante,$Nombre_estudiante,$Apellido_estud,$direccion_est,$telefono_est,$acudiente,$grupo_est);
$obj=new funcion();

$obj->InsertarDatos($datos);

echo'<script type="text/javascript"> alert("DATO ALMACENADO")</script>';
echo "<script> window.location.href = 'http://localhost/trabajo_miguel/CRUD_POO/';</script>";







?>