<?php
$id_libro="sin_dato";


if (!empty($_REQUEST['id_libro'])){ 

    $id_libro = $_POST['id_libro'];
    

$mysqli = new mysqli("localhost", "root", "", "biblioteca1");

if ($mysqli->connect_errno) {
    throw new Exception(
        "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . 
        $mysqli->connect_error);
}

$sql = "SELECT * FROM `libro` WHERE `id`='".$id_libro."';";
$resultado = $mysqli->query($sql);

$mysqli->close();
foreach($resultado as $row){
echo "<html>";
    echo "<body style='background-size: 100%; background-image: url(libre.jpg);'>";
     echo "<marquee behavior='left'  bgcolor='silver' direction='alternate' style='border:solid;'>";
    echo "<font face='universe' size='7' color='#silver'>";
    echo "<label> Modificar libro </label>" ;
    echo"</font>";
    echo "</marquee>";
  
          
            echo "<form action='guardar_modificado_lib.php' method='POST'>";
            echo  "<center>";
           echo "<font face='universe' size='6' color='black'>";
                echo "<label for='titulo'> Libro </label>";
                echo "<input type='hidden' maxlength='100' name='id_libro' id='id_libro' value='".$id_libro."' />";
                echo "</br>";
                echo "</br>";
                echo "<label for='titulo'>Nombre Libro</label></br>";
                echo "<input type='text' maxlength='100' name='titulo' id='titulo' style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:400px;' value='".$row['titulo']."'/>";
                echo "</br>";
                echo "</br>";
               echo "<label for='autor'>Autor</label></br>";
                echo "<input type='text' maxlength='100' name='autor' id='autor'style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:300px;' value='".$row['autor']."'/>";
                echo "</br>";
                echo "</br>";
                echo "<label for='anio'>Anio</label></br>";
                echo "<input type='text' maxlength='100' name='anio' id='anio'style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:400px;' value='".$row['anio']."'/>";
                echo "</br>";
                echo "</br>";
                echo "<label for='genero'>Genero</label></br>";
                echo "<input type='text' maxlength='100' name='genero' id='genero' style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:400px;'value='".$row['genero']."'/>";
                echo "</br>";
                echo "</br>";
                echo "<label for='edicion'>Edicion</label></br>";
                echo "<input type='text' maxlength='100' name='edicion' id='edicion' style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:400px;'value='".$row['edicion']."'/>";
                echo "</br>";
                echo "</br>";
                echo "<label for='tipo_edicion'>Tipo Edicion</label></br>";
                echo "<input type='text' maxlength='100' name='tipo_edicion' id='tipo_edicion' style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:400px;'value='".$row['tipo_edicion']."'/>";
                echo "</br>";
                echo "</br>";
                echo "<label for='editorial'>Editorial</label></br>";
                echo "<input type='text' maxlength='10' name='editorial' id='editorial' style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:400px;'value='".$row['editorial']."'/>";
                echo "</br>";
                echo "</br>";
                echo "<label for='num_paginas'>Num. Paginas</label></br>";
                echo "<input type='text' maxlength='100' name='num_paginas' id='num_paginas'style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:400px;' value='".$row['num_paginas']."'/>";
                echo "</br>";
                echo "</br>";
                echo "<label for='sinopsis'>Sinopsis</label></br>";
                echo "<textarea name='sinopsis' style='font-size:25px; color:black; background-color:silver ;
                              height:200px; width:300px;'>".$row['sinopsis']."</textarea>";
                echo "</br>";
                echo "</br>";
                echo "<label for='observaciones'>Observaciones</label></br>";
                echo "<textarea name='observaciones'style='font-size:25px; color:black; background-color:silver ;
                              height:200px; width:300px;'>".$row['observaciones']."</textarea>";
                echo "</br>";
                echo "</br>";
                echo "<input type='submit' name='modificar' Value='Modificar'style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:300px;'/>";
            echo "</form>";
        echo "</div> ";
        echo "</font>";
        echo "</center>";
    echo "</body>";
echo "</html>";

}
}
 
else
{
echo "<html>";
echo "<body>";
  echo "<div>";  
  echo "<h2><p>Error al Buscar el Id o no se Encontro????..</p></h2>";
  echo "</div>";
  echo "<div>";
  echo "<h3><p>Mostrar Todos los Libros</p></h3>";
  echo "<a href='directorio_libros.php' target='_self'> <input type='button' name='boton'style='font-size:25px; color:black; background-color:silver ;
                              height:50px; width:300px;' value='Mostrar'/> </a>";
  echo "</div>";  
echo "</body>";
echo "</html>";
 }


?>