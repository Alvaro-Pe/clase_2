<?php 
 include("modelo/libro.php");

 $libros= new libro();

 $listado_de_libros =$libros->ListadoLibro();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body class="container mt-4">

    <h2 class="text-center">Lista de libro</h2>


    <a href="vista/crear.php" class="btn btn-primary mb-3">agregar</a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>autor</th>
                <th>anio</th>
                <th>genero</th>
                <th>disponible</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($raw =$listado_de_libros->fetch_assoc()):


            ?>

                <tr>
                    <td><?= $raw["id"] ?></td>
                    <td><?= $raw["titulo"] ?></td>
                    <td><?= $raw["autor"] ?></td>
                    <td><?= $raw["anio_publicacion"] ?></td>
                    <td><?= $raw["genero"] ?></td>
                    <td><?= $raw["disponible"] ? "si" : "no" ?></td>
                    <td> <a href="vista/editar.php?id=<?= $raw["id"] ?>" class="btn btn-warning btn-5m">Editar</a>
                        <a href="controlador/eliminar_libro.php?id=<?= $raw["id"] ?>" class="btn btn-danger btn-5m" onclick="return('Estas seguro?')">Eliminar</a>
                    </td>



                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>




</body>
</html>