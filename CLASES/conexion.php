<?php
Class conectar{
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $bd = "bd";


    public function conexion(){


$conexion=mysqli_connect(

     $this->servidor,
     $this->usuario,
     $this->password,
     $this->bd
     
     );

    return $conexion;
}
}
$obj =new conectar();
if($obj->conexion()){
    


}else{
    echo'<script type="text/javascript"> alert("FALLO LA CONEXION")</script>';
}
?>