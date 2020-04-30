<?php
function verPagos()
{
    $conexion = conectarUsuarios();
    $select_pagos = "SELECT clientes.Nombre as nombreCliente, 
    mensualidades.nombreMen as nombreMensualidad, pagos.fecha, pagos.pago 
    FROM mensualidades 
    INNER JOIN pagos INNER JOIN clientes ON mensualidades.id = pagos.idMensualidades 
    WHERE clientes.CodigoCliente=pagos.idCliente;";
    $resultado = $conexion->query($select_pagos);

    while ($fila = $resultado->fetch_array()) {
?>
        <div class="Row">
            <div class="Celda">
                <div class="contenidos1-nombreCliente"><?php echo "${fila['nombreCliente']}"; ?></div>
            </div>

            <div class="Celda">
                <div class="contenidos1-nombreMensualidad"><?php echo "${fila['nombreMensualidad']}"; ?></div>
            </div>

            <div class="Celda">
                <div class="contenidos1-fecha"><?php echo "${fila['fecha']}"; ?></div>
            </div>

            <div class="Celda">
                <div class="contenidos1-pagados"><?php echo "${fila['pago']}"; ?></div>
            </div>
        </div>
    <?php
    }
}

function listaDeudores()
{
    $conexion = conectarUsuarios();
    $select_deudores = 'SELECT clientes.Nombre as nombreCliente, 
    mensualidades.nombreMen as nombreMensualidad, pagos.fecha, pagos.pago 
    FROM mensualidades 
    INNER JOIN pagos INNER JOIN clientes ON mensualidades.id = pagos.idMensualidades 
    WHERE clientes.CodigoCliente=pagos.idCliente AND pagos.pago="No"';

    $resultado = $conexion->query($select_deudores);
    while ($fila = $resultado->fetch_array()) {
    ?>
        <div class="Row">
            <div class="Celda">
                <div class="contenidos1-nombreCliente"><?php echo "${fila['nombreCliente']}"; ?></div>
            </div>

            <div class="Celda">
                <div class="contenidos1-nombreMensualidad"><?php echo "${fila['nombreMensualidad']}"; ?></div>
            </div>

            <div class="Celda">
                <div class="contenidos1-fecha"><?php echo "${fila['fecha']}"; ?></div>
            </div>

            <div class="Celda">
                <div class="contenidos1-pagados"><?php echo "${fila['pago']}"; ?></div>
            </div>
        </div>
<?php
    }
}
?>