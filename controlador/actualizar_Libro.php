<?php
include(__DIR__ . "/../modelo/libro.php");

$libro = new libro();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_libro = $_POST["id_libro"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $anio = $_POST["anio_publicacion"];
    $genero = $_POST["genero"];
    $disponible = isset($_POST["disponible"]) ? 1 : 0;

    $libro->Actualizalibro($id_libro,$autor,$anio,$genero,$disponible,$titulo);
}
