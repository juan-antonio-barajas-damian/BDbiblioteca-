<?php
//Validar si hay una sesion activa
//Si no redireccionar o mostrar error

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

if (!empty($_REQUEST['titulo']) and !empty($_REQUEST['autor']) and !empty($_REQUEST['anio'])and !empty($_REQUEST['genero'])and !empty($_REQUEST['edicion'])and !empty($_REQUEST['tipo_edicion'])and !empty($_REQUEST['editorial'])and !empty($_REQUEST['num_paginas'])and !empty($_REQUEST['sinopsis'])and !empty($_REQUEST['observaciones'])){ 

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

$sql = "INSERT INTO `libro` ".
    "(`titulo`, `autor`, `anio`, `genero`, `edicion`, ".
    "`tipo_edicion`, `editorial`, `num_paginas`, `sinopsis`, `observaciones`, `saved_at`) ".
    "VALUES ".
    "('".$titulo."', '".$autor."', '".$anio."', '".$genero."', '".$edicion."', ".
    "'".$tipo_edicion."', '".$editorial."', '".$num_paginas."', '".$sinopsis."', '".$observaciones."', '".date("Y-m-d H:m:s")."');";

$resultado = $mysqli->query($sql);

$mysqli->close();

echo "<html>";
echo "<body style='background-size: 100%; background-image: url(libros.jpg);'>";
    echo "<div>";
    echo "<center>";
    echo "<marquee behavior='left'  bgcolor='#FF0040' direction='alternate' style='border:solid;'>";
    echo "<font face='universe' size='7' color='#81F781'>";
   echo "<label> Gracias!!!.....:) :) :) :) !!!!Libro agregado!!!!! (: (: (: (: ";
  echo "</label>";
   echo "</font>";
   echo "</marquee>";
   echo "<font face='universe' size='6' color='#81F781'>";
    echo "<h1>Libro guardado exitosamente </h1>";
   
    echo "</font>";
    echo "</div>";
    echo "<div>";
    echo "<center>";
    echo "<font face='roman' size='7' color='#81F781'>";
    echo "<h4><p>ingresar mas libros</p></h4>";
    echo "<a href='ingresa_libro.php' target='_self'> <input type='button' name='boton' value='Regresar'
          style='font-size:25px; color:#81F781; background-color:#FF0040 ;
                              height:50px; width:300px;' /> </a>"; 
    echo "</center>";
    echo "</font>";
    echo "</div>";
    echo "<div>";
    echo "<center>";
    echo "<font face='universe' size='7' color='#81F781'>";
    echo "<h4><p>Mostrar Todos los Libros</p></h4>";
    echo "<a href='directorio_libros.php' target='_self'> <input type='button' name='boton' value='Mostrar' 
    style='font-size:25px; color:#81F781; background-color:#FF0040 ;
                              height:50px; width:300px;' /> </a>";
    echo "</center>";
    echo "</font>";
    echo "</div>";  
    echo "<br>".
    "<br>" ;
    echo "<marquee behavior='left'  bgcolor='#ff0040' direction='right' style='border:solid';>";
    echo "<font face='universe' size='10' color='#81f781'>";
   echo "<label>Biblioteca publica</label>";
   echo "</font>";
   echo "</marquee>";
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