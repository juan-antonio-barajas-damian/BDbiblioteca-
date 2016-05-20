<html>

  <body style="background-size: 100%; background-image: url(libros.jpg);" >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <marquee behavior="left"  bgcolor="silver" direction="alternate" style="border:solid;">
    <font face="universe" size="8" color="purple" >
    <label>Ingresar libros</label>
    </font>
    </marquee>
     <div>
     <center>
                <form action="guardar_libros.php" method="POST">
                <font face="verdana" size="6" color="white">
                <label for="titulo">Titulo del Libro</label></br>
                <input type="text" maxlength="100" name="titulo" id="titulo" 
                       style="font-size:20px; color:white; background-color:black ;
                        height:30px; width:300px;" />
                <br>
 
                <label for="autor">Nombre del Autor</label></br>
                <input type="text" maxlength="100" name="autor" id="autor" 
                       style="font-size:20px; color:white; background-color:black ;
                       height:30px; width:300px;" />
<br>
                <label for="anio">Anio que salio</label></br>
                <input type="text" maxlength="100" name="anio" id="anio"
                       style="font-size:20px;color:white; background-color:black;
                              height:30px; width:200px;" />
<br> 
            
                <label for="genero">Genero del Libro</label></br>
                <input type="text" maxlength="256" name="genero" id="genero"
                       style="font-size:20px;color:white;  background-color:black ;
                       height:30px; width:300px;" />
<br>
            
            
                <label for="edicion">Edicion del Libro</label></br>
                <input type="text" maxlength="256" name="edicion" id="edicion"
                       style="font-size:20px; color:white; background-color:black ;
                       height:30px; width:200px;" />
<br>
               
                <label for="tipo_edicion">Tipo de Edicion</label></br>
                <input type="text" maxlength="256" name="tipo_edicion" id="tipo_edicion"
                       style="font-size:20px;color:white;  background-color:black ;
                              height:30px; width:200px;" />
<br>
               
               
                <label for="editorial">Editorial del Libro</label></br>
                <input type="text" maxlength="10" name="editorial" id="editorial"
                       style="font-size:20px; color:white; background-color:black ;
                              height:30px; width:300px;" />
<br>
               
               
                <label for="num_paginas">Numero de Paginas</label></br>
                <input type="text" maxlength="100" name="num_paginas" id="num_paginas"
                       style="font-size:20px;color:white;  background-color:black;
                              height:30px; width:200px;" />
<br>
               
               
                <label    for="sinopsis">Sinopsis</label></br>
                <textarea name="sinopsis"
                          style="font-size:20px; color:white; background-color:black;
                                 height:200px; width:400px;" />
                </textarea>
               
               </br>
                <label    for="observaciones">Observaciones</label></br>
                <textarea name="observaciones"
                          style="font-size:20px;color:white;  background-color:black ;
                                 height:200px; width:400px;" />
                </textarea>
               
               <br>
                <input type="submit" name="enviar" Value="Enviar"
                       style="font-size:20px; color:white; background-color:purple ;
                              height:50px; width:300px;" />
                              </center>
                              </font>
            </form>
        </div>
         <marquee behavior="left"  bgcolor="silver" direction="alternate"
                  style="border:solid;">
    <font face="universe" size="6" color="purple" >
    <label>Biblioteca Publica</label>
    </font>
    </marquee>
    </body>
</html>
