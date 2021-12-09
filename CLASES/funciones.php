<?php

class funcion{
    
    public function MostrarDatos($sql){

        $con= new conectar();
        $conexion=$con->conexion();
        $result =mysqli_query($conexion,$sql);

        return mysqli_fetch_all($result,MYSQLI_ASSOC);

    }


    public function InsertarDatos($datos){

     $con=new conectar();
     $conexion=$con->conexion();
     $sql="INSERT INTO estudiantes_col(id_estudiante, Nombre_estudiante, Apellido_estud, direccion_est, telefono_est, acudiente, grupo_est) 
     VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";
      return $result =mysqli_query($conexion,$sql);

    }

    public function EliminarDatos($id){

        $con = new conectar();
        $conexion=$con->conexion();
        $sql="DELETE FROM estudiantes_col WHERE id_estudiante='$id'"; 
        return $result =mysqli_query($conexion,$sql);
   
       }

       public function ActualizarDatos($datos){
        $con= new conectar();
        $conexion=$con->conexion();
        $sql="UPDATE estudiantes_col SET Nombre_estudiante='$datos[1]', Apellido_estud='$datos[2]',direccion_est='$datos[3]', telefono_est='$datos[4]', acudiente='$datos[5]', grupo_est='$datos[6]' WHERE id_estudiante='$datos[0]'";
        return $result =mysqli_query($conexion,$sql);
                
        }

    

}

?>