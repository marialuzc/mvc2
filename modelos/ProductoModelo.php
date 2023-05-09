<?php

class ProductoModelo
{

    private $condb;

    private $productos;
     

    public function __construct()
    {        
        $this->condb = Conectar::conexion();
    }


    public function get_productos()
    {
        $consulta = $this ->condb->query("SELECT * FROM productos");
        print_r($consulta);
        while ( $fila = $consulta->fetch_assoc()) {
            $this->productos[] = $fila;
        }
        $this->condb->close();
        return $this->productos;
    }

    public function get_productoCod($codigo)
    {
        $consulta = $this->condb->query("SELECT * FROM productos where codProducto = '$codigo'");
        $filas = $consulta->fetch_assoc();
        $this->productos[] = $filas;        
        $this->condb->close();
        return $this->productos;

    }


    public function insertarProducto($codProducto, $nombreProducto, $precioProducto, $codCategoria){        
        $sql = "INSERT INTO productos (codProducto, nombreProducto, precioProducto, codCategoria ) VALUES ('$codProducto','$nombreProducto','$precioProducto','$codCategoria')";        
                
        $resul = $this->condb->query($sql);        
        $this->condb->close();
        return $resul;
    }

    public function eliminarProducto($cod){
        $sql= "DELETE FROM productos where codProducto = '$cod'";
        $resul = $this->condb->query($sql);        
        $this->condb->close();
        return $resul;
    }

    public function actualizarProducto($cod, $nombre, $precio){
        $sql = "UPDATE productos set nombreProducto = '$nombre', precioProducto = '$precio' WHERE codProducto = '$cod'";
        $resul = $this->condb->query($sql);        
        $this->condb->close();
        return $resul;

    }
    
}

?>