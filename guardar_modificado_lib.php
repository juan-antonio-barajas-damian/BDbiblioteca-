<?php

//Validar si hay una sesion activa
//Si no redireccionar o mostrar error
$id_libro="sin_dato";
$titulo="sin_dato";
$autor="sin_dato"; 
$anio="sin_dato";
$genero="sin_dato";
$edicion="sin_dato";
$tipo_edicion="sin_dato";
$editorial="sin_dato";
$num_paginas="sin_dato";
$sinopsis="sin_dato";
$observaciones="sin_dato";


if (!empty($_REQUEST['id_libro']) and !empty($_REQUEST['titulo']) and !empty($_REQUEST['autor']) and !empty($_REQUEST['anio'])and !empty($_REQUEST['genero'])and !empty($_REQUEST['edicion'])and !empty($_REQUEST['tipo_edicion'])and !empty($_REQUEST['editorial'])and !empty($_REQUEST['num_paginas'])and !empty($_REQUEST['sinopsis'])and !empty($_REQUEST['observaciones'])){ 

    $id_libro = $_POST['id_libro'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];
    $genero = $_POST['genero'];
    $edicion = $_POST['edicion'];
    $tipo_edicion = $_POST['tipo_edicion'];
    $editorial = $_POST['editorial'];
    $num_paginas = $_POST['num_paginas'];
    $sinopsis = $_POST['sinopsis'];
    $observaciones = $_POST['observaciones'];

$mysqli = new mysqli("localhost", "root", "", "biblioteca1");

if ($mysqli->connect_errno) {
    throw new Exception(
        "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . 
        $mysqli->connect_error);
}

$sql = "UPDATE `libro` SET `titulo` = '".$titulo."',`autor` = '".$autor."',`genero` = '".$genero."',`anio` = '".$anio."',`edicion` = '".$edicion."',`tipo_edicion` = '".$tipo_edicion."',`editorial` = '".$editorial."',`num_paginas` = '".$num_paginas."',`sinopsis` = '".$sinopsis."',`observaciones` = '".$observaciones."',`modified_in`='".date('Y-m-d H:i:s')."' WHERE `id`='".$id_libro."';";
    
$resultado = $mysqli->query($sql);

$mysqli->close();

echo "<html>";
echo "<body style='background-size: 20%; background-image: url(libr.jpg);'>";
  echo "<center>";
    echo "<div>";
    echo "<marquee behavior='left'  bgcolor='silver' direction='left' style='border:solid';>";
    echo "<font face='universe' size='10' color='#ff0040'>";
    echo "<label>Libro agregado  </label>";
   echo "</font>";
   echo "</marquee>";
    echo "</div>";
    echo "<div>";
    echo "<font face='universe' size='6' color='white'>";
    echo "<h4><p>Seguir Ingresando mas Libros</p></h4>";
    echo"</font>";
    echo "<a href='ingresa_libro.php' target='_self'> <input type='button' name='boton' value='Regresar'style='font-size:25px; color:silver; background-color:#ff0040 ;
                              height:50px; width:300px;' /> <br></a>"; 
                              echo "</br>";
    echo "</div>";
    echo "<div>";
    echo "<marquee behavior='left'  bgcolor='#ff0040' direction='right' style='border:solid';>";
    echo "<font face='universe' size='10' color='silver'>";
    echo "<label>Mostrar todos los libros </label>";
   echo "</font>";
   echo "</marquee> <br>" ;

    echo "<a href='directorio_libros.php' target='_self'> <input type='button' name='boton' value='Mostrar' style='font-size:25px; color:#81F781; background-color:#FF0040 ;
                              height:50px; width:300px;' /><br> </a>";
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
  echo "<center>"; 
echo "</body>";
echo "</html>";
 }
?>