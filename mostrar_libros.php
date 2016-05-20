<?php
require_once('libro_clon.php');
require_once('listar_libros.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Lista de Libros</title>
    <meta charset="UTF-8"> 
    </head>
    <body>
        <h1>Listado de Libros</h1>
        <?php
            $modelo = new libro();
            $libros = $modelo->encontrarLibros();
            $listar = new Listar_libros();
            $listar->libros = $libros;
            $listar->generaTabla();
        ?>
        <h1>Agregar nuevo Libro ala Biblioteca y Mostrar</h1>
        <?php
            $modelo->nuevo_libro();
            $libros = $modelo->encontrarLibros();
            $listar->libros = $libros;
            $listar->generaTabla();
        ?>
        <h1>Editar el &uacute;ltimo Libro Agregado y Mostrar</h1>
        <?php
            $modelo->editar_Ultimo_Libro();
            $libros = $modelo->encontrarLibros();
            $listar->libros = $libros;
            $listar->generaTabla();
        ?>
        <h1>Eliminar el &uacute;ltimo Libro y Mostrar</h1>
        <?php
            $modelo->eliminar_Ultimo_Libro();
            $libros = $modelo->encontrarLibros();
            $listar->libros = $libros;
            $listar->generaTabla();
        ?>
    </body>
</html>

