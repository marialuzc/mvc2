<?php
    require_once 'modelos/Conexion.php';
    require_once 'modelos/ProductoModelo.php';

    $producto = new ProductoModelo(); // llamada al metodo constructor
     
   
    $matrizproducto = $producto->get_productos();  

    print_r($matrizproducto);
    
    //require_once 'vistas/html/productos.php';

?>
