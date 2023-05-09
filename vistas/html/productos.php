<div id="contenido">
    <h2>Listado de Productos</h2>

    <table id="tabla">
        <tr align="center" bgcolor="#cc0000">
            <th width="126" scope="col">CODIGO</th>
            <th width="456" scope="col">NOMBRE</th>
            <th width="119" scope="col">PRECIO</th>
            <th width="145" scope="col">ELIMINAR</th>
            <th width="136" scope="col">MODIFICAR</th>
        </tr>
        <tr>
            <?php
            foreach ($matrizproducto as $fila) {
                ?>
            </tr>
            <tr>
                <td>
                    <?php echo $fila['codProducto']; ?>
                </td>
                <td>
                    <?php echo $fila['nombreProducto']; ?>
                </td>
                <td>
                    <?php echo $fila['precioProducto']; ?>
                </td>
                <!-- <td><a href="index.php?accion=eliminarProducto?cod=<?php echo $fila['codProducto']; ?>">Eliminar</a></td>
                <td><a href="index.php?accion=modificarProducto?cod=<?php echo $fila['codProducto']; ?>">Modificar</a>
                 -->

                <td><a href="controladores/EliminarProductoControlador.php?cod=<?php echo $fila['codProducto']; ?>">Eliminar</a></td>
                <td><a href="controladores/ModProductoControlador.php?cod=<?php echo $fila['codProducto']; ?>">Modificar</a></td>
            
            </td>

            </tr>
            <?php
            }
            ?>
    </table>
</div>