<?php
include(__DIR__."/../configuracion/Conexion.php");

class libro extends Conexion
{
      

    function  Crearlibros($titulo, $autor, $anio_publicacion, $genero, $disponible)
    {

        $sql = "INSERT INTO libro (titulo,autor,anio_publicacion,genero,disponible) values  ('$titulo','$autor','$anio_publicacion','$genero','$disponible')";

        if ($this->conexion->query($sql)) {
            header("Location: ../index.php");
        } else {
            echo "eror" . $this->conexion->error;
        }
    }


    function  Eliminarlibro($id)
    {

        $sql = "DELETE FROM libro where id= $id";

        if ($this->conexion->query($sql)) {
            header("Location: index.php");
        } else {
            echo "error" . $this->conexion->error;
        }
    }

    function Actualizalibro($id, $autor, $anio_publicacion, $genero, $disponible, $titulo)
    {

        $sql = "UPDATE libro set titulo='$titulo',autor='$autor',anio_publicacion='$anio_publicacion',genero='$genero',disponible='$disponible' where id=$id";

        if ($this->conexion->query($sql)) {
            header("Location: ../index.php");
        } else {
            echo "error" . $this->conexion->error;
        }
    }


    function ListadoLibro()
    {
        $sql = "SELECT * FROM libro";

        $resultado = $this->conexion->query($sql);

        return $resultado;
    }


    function Libroporid($id){
      
        $sql="SELECT * FROM libro where id=$id";

        $resultado= $this->conexion->query($sql);

        return $resultado;

    }
}
