<?php
require_once('conexion.php');

class Libro
{
    public function encontrarTodos()
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM libro";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $resultado[] = $row;
                     }
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }

    public function nuevo()
    {
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "INSERT INTO `libro` ".
                "(`titulo`, `autor`, `anio`, `genero`, `edicion`, ".
                "`tipo_edicion`, `editorial`, `num_paginas`, `sinopsis`, `observaciones`, `saved_at`) ".
                "VALUES ".
                "('El Principe de la Niebla', 'Ruiz Zafon', '2007', 'Novela', 'ISBN:978-84-08-07280-5', ".
                "'Bolsillo', 'Booket', '240', 'Un diabólico príncipe que concede cualquier deseo... ', 'Libro Nuevo', '".date("Y-m-d")."');";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        } 
    }

    private function obtenerUltimo()
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = 'SELECT * FROM libro ORDER BY id DESC LIMIT 1';
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0)
                {
                    $row = $result->fetch_assoc();
                    $resultado = $row; 
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        }
    }

    public function editarUltimo()
    {
        try
        {
            $ultimo = $this->obtenerUltimo();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "UPDATE `libro` SET `observaciones`='editado el ".date('Y-m-d H:i:s')."', `modified_in`='".date('Y-m-d H:i:s')."' WHERE `id`='".$ultimo['id']."';";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public function eliminarUltimo()
    {
        try
        {
            $ultimo = $this->obtenerUltimo();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "DELETE FROM `libro` WHERE `id`='".$ultimo['id']."';";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        }

    }
}
 ?>
