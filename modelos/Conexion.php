<?php

class Conectar
{
    
    public static function conexion()
    {
        try {
            //$conexion = new mysqli("localhost", "root", "", "dbalmacen");
            $condb = new mysqli("localhost", "root", "", "dbalmacen");
            echo "Conexion exitosa";

        } catch (Exception $e) {
            die("error de conexion a la Base de Datos" . $e->getMessage());
        }
        return $condb;
    }
}
?>