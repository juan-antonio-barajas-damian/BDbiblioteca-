<?php
require_once('libro_clon.php');
require_once('listar_libros.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Listado de Libros</title>
    <meta charset="UTF-8"> 
    </head>
    <body>
      <marquee behavior="left"  bgcolor="silver" direction="alternate" style="border:solid">
    <font face="universe" size="10" color="purple" >
    <label>Listado de libros en existencia</label>
    </font>
    </marquee>
        <?php
         echo "<html>";
            echo "<body style='background-size: 100%; background-image: url(1.jpg);'>";
        echo "<font face='universe' size='5' color='black'>";
            $modelo = new libro();
            $libros = $modelo->encontrarLibros();
            $listar = new Listar_libros();
            $listar->libros = $libros;
            $listar->generaTabla();

           echo "<font>";
            echo "</body>";
            echo "</html>";

        ?>
        <!--<h1>Agregar nuevo Libro ala Biblioteca y Mostrar</h1>
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
        ?>-->
        
    </body>
</html>

<html>
    <body >

        <div>
        <br>
        <center>
         <marquee behavior="left"  bgcolor="silver" direction="alternate" style="border:solid">
    <font face="universe" size="7" color="#FF0040 " >
    <label>Ingresar libro</label>
    </font>
    </marquee>
       
        <br>
        <a href='ingresa_libro.php' target='_self'> <input type='button' name='boton' value='Ingresar ' style='font-size:25px; color:#81F781; background-color:#FF0040 ;
             height:50px; width:300px;' /> </a>
        </center>
        </div>
        <br>
        <div>
        <center>
        <form action="modificar_libro.php" method="POST">
        <marquee behavior='left'  bgcolor='silver' direction='alternate' style='border:solid;'>
        <font face='universe' size='7' color='#FF0040 '>
        <label>Modificar libro</label>
    </font>
    </marquee>
        <br>
        <input type="text" maxlength="4" name="id_libro" placeholder="introdusca el id" id="id_libro"style="font-size:20px; background-color:white ;
              height:20px; width:200px;" />
        </font>
        <br>
        <a href='modificar_libro.php' target='_self'> 
        <input type='submit'  name='modificar' value='Modificar' style='font-size:25px; color:#81F781; background-color:#FF0040 ;
                              height:50px; width:300px;' />
        </a>
        </center>
        </form>
        </div>
        <br>
        <div>
        <center>
        <form action="eliminar_libro.php" method="POST">
        <marquee behavior="left"  bgcolor="silver" direction="alternate" style="border:solid">
    <font face="universe" size="7" color="#FF0040 " >
    <label>Eliminar Libro</label>
    </font>
    </marquee>
       <br>
        <input type="text" maxlength="4" name="id_libro_eliminar"  placeholder="introdusca el id " id="id_libro_eliminar" style="font-size:20px; background-color:white ;
              height:20px; width:200px;" />
        </font>
        <br>
        <a href='eliminar_libro.php' target='_self'> 
        <input type='submit' name='eliminar' value='Eliminar' style='font-size:25px; color:#81F781; background-color:#FF0040 ;
                              height:50px; width:300px;' /> </a>
        </a>
        </center>
        </form>
        </div>
        </body>
</html>

