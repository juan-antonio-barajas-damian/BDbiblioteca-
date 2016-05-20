<?php
$id_libro_eliminar="sin_dato";


if (!empty($_REQUEST['id_libro_eliminar'])){ 

    $id_libro_eliminar = $_POST['id_libro_eliminar'];
    

$mysqli = new mysqli("localhost", "root", "", "biblioteca1");

if ($mysqli->connect_errno) {
    throw new Exception(
        "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . 
        $mysqli->connect_error);
}

$sql = "DELETE FROM `libro` WHERE `id`='".$id_libro_eliminar."';";
$resultado = $mysqli->query($sql);
            
$mysqli->close();

echo "<html>";
echo "<body style='background-size: 100%; background-image: url(libro.jpg);'>";
    echo "<div>";
    echo "<h1>Gracias!!....</h1>";
    echo "<h3><p>Se Elimino Libro</p></h3>";
    echo "</div>";
    echo "<div>";
    echo "<h4><p>Seguir Ingresando mas Libros</p></h4>";
    echo "<a href='ingresa_libro.php' target='_self'> <input type='button' name='boton' value='Regresar'/> </a>"; 
    echo "</div>";
    echo "<div>";
    echo "<h4><p>Mostrar Todos los Libros</p></h4>";
    echo "<a href='directorio_libros.php' target='_self'> <input type='button' name='boton' value='Mostrar'/> </a>";
    echo "</div>";  
echo "</body>";
echo "</html>";
}

else
{
echo "<html>";
echo "<body>";
  echo "<div>";  
  echo "<h2><p>Error al Mandar la Informacion o uno de los Campos lo Mandaste Vacio</p></h2>";
  echo "</div>";
  echo "<div>";
  echo "<h3><p>Seguir Ingresando mas Libros</p></h3>";
  echo "<a href='ingresa_libro.php' target='_self'> <input type='button' name='boton' value='Regresar'/> </a>";
  echo "</div>";
  echo "<div>";
  echo "<h3><p>Mostrar Todos los Libros</p></h3>";
  echo "<a href='directorio_libros.php' target='_self'> <input type='button' name='boton' value='Mostrar'/> </a>";
  echo "</div>";  
echo "</body>";
echo "</html>";
 }



?>