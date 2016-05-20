<?php
class Listar_libros
{
    public $libro;

    public function generaTabla()
    {

        echo '<table>';
        
         
             echo '<tr>';
              echo '<th>' . ' <marquee >' ;
                echo '<th>ID</th>';
                echo '<th>TItulo del Libro</th>';
                echo '<th>Autor del Libro</th>';
                echo '<th>Anio</th>';
                echo '<th>Genero</th>';
                echo '<th>N# Edicion</th>';
                echo '<th>Tipo Edicion</th>';
                echo '<th>Editorial</th>';
                echo '<th>Num. Paginas</th>';
                echo '<th>Sinopsis</th>';
                echo '<th>Observaciones</th>';
                echo '<th>Fec. Agregado</th>';
                echo '<th>Fec. Modificasion</th>';
                echo '</th>';
            echo '</tr>';
            echo '</marquee>';
            foreach($this->libros as $listar_libro){
                echo '<tr>';
                    echo '<td>'.$listar_libro['id']. '</td>';
                    echo '<td>'.$listar_libro['titulo'].'</td>';
                    echo '<td>'.$listar_libro['autor'].'</td>';
                    echo '<td>'.$listar_libro['anio'].'</td>';
                    echo '<td>'.$listar_libro['genero'].'</td>';
                    echo '<td>'.$listar_libro['edicion'].'</td>';
                    echo '<td>'.$listar_libro['tipo_edicion'].'</td>';
                    echo '<td>'.$listar_libro['editorial'].'</td>';
                    echo '<td>'.$listar_libro['num_paginas'].'</td>';
                    echo '<td>'.$listar_libro['sinopsis'].'</td>';
                    echo '<td>'.$listar_libro['observaciones'].'</td>';
                    echo '<td>'.$listar_libro['saved_at'].'</td>';
                    echo '<td>'.$listar_libro['modified_in'].'</td>';
                echo '</tr>';
            }
        echo "</table>";
    }
}

?>
