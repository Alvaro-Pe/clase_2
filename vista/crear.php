<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar libro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body class="container mt-4">
    <h2 class="text-center">Agregaar libro</h2>

    <form action="../controlador/Agregar_Libro.php" method="post" class="border p-4 rounded bg-light">


        <label for="" class="form-label ">Titulo</label>
        <input type="text" name="titulo" id="" class="form-control" required>



        <label for="" class="form-label ">Autor</label>
        <input type="text" name="autor" id="" class="form-control" required>

        <label for="" class="form-label ">Anio</label>
        <input type="number" name="anio_publicacion" id="" class="form-control" required>


        <label for="" class="form-label ">genero</label>
        <input type="text" name="genero" id="" class="form-control" required>




        <div class="form-check mt-2">
            <input type="checkbox" name="disponible" id="" class="form-check-input" checked>

            <label for="" class="form-check-label"> DISPONIBLE</label>
        </div>

        <button type="submit" class="btn btn-success mt-3">
            Guardar

        </button>

        <a href="../index.php" class="btn btn-secondary mt-3">Volver</a>


    </form>




</body>

</html>