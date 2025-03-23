<?php
  include(__DIR__."/../modelo/libro.php");
  $libros = new libro();

  if($_SERVER["REQUEST_METHOD"]=="POST"){


    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $anio = $_POST["anio_publicacion"];
    $genero = $_POST["genero"];
    $disponible = isset($_POST["disponible"]) ? 1 : 0;

     $libros->Crearlibros($titulo,$autor,$anio,$genero,$disponible);
  }



?>