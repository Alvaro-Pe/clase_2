<?php 
 include(__DIR__."/../modelo/libro.php");
 $libros = new libro();
 $id=$_GET["id"];

 $libros->Eliminarlibro($id);
 header("Location:  ../index.php");


?>