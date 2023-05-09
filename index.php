<?php
require_once 'vistas/html/encabezado.php';

?>

<?php


if (isset($_GET["accion"])) {
    if ($_GET["accion"] == "inicio") {
        require_once 'vistas/html/inicio.php';
    }
    if ($_GET["accion"] == "productos") {
        //require_once 'vistas/html/productos.php';
        require_once 'controladores/ProductoControlador.php';
    }
    if ($_GET["accion"] == "categorias") {
        require_once 'vistas/html/categorias.php';
    }
    if ($_GET["accion"] == "usuarios") {
        require_once 'vistas/html/usuarios.php';
    }

} else
    require_once 'vistas/html/inicio.php';


?>



<?php
require_once 'vistas/html/pie.php';

?>