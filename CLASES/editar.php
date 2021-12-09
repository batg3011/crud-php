<?php

require 'funciones.php';
require 'conexion.php';

$ida=$_POST['id_estudiante'];
$noma=$_POST['Nom'];
$apea=$_POST['Ape'];
$dira=$_POST['dir'];
$tela=$_POST['tel'];
$acua=$_POST['acu'];
$grua=$_POST['gru'];


echo $ida;
echo$noma;
echo$apea;
echo$dira;
echo$tela;
echo$acua;
echo$grua;

$datos=array($ida, $noma, $apea, $dira, $tela, $acua, $grua);

$obj =new funcion();
$obj->ActualizarDatos($datos);

echo'<script type="text/javascript"> alert("REGISTRO ACTUALIZADO CON EXITO!")</script>';
echo "<script> window.location.href = 'http://localhost/trabajo_miguel/CRUD_POO/';</script>";
?>