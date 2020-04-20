<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_xs.css">
    <!--movil-->
    <link rel="stylesheet" media=" all and (min-device-width : 768px) and (max-device-width : 991px)" href="css/estilos_sm.css">
    <!--IPAD vertical-->
    <link rel="stylesheet" media=" all and (min-device-width : 992px) and (max-device-width : 1199px) " href="css/estilos_md.css">
    <!--IPAD horizontal-->
    <link rel="stylesheet" media=" all and (min-device-width : 1200px)" href="css/estilos_lg.css">
    <!--monitor paronamico-->

    <title>Contacto</title>
</head>

<body>
    <?php
    include 'header.php';

    //Llamamos a los campos
    if ($_POST) {
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        //Datos para el correo
        $destinatario = "sergiomartinez2m@gmail.com";

        $carta = "De: $nombre";
        $carta = "Para: $correo";
        $carta = "Mensaje: $mensaje";

        // // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        // $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        // $cabeceras .= 'Content-type: text/html; charset=UTF_8' . "\r\n";
        // $cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        // $cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";

        //Enviar Correo
        $envio = mail($destinatario, $asunto, $carta);

        if ($envio) {
            echo "Se ha enviado el corrreo perfectamente";
        } else {
            echo "No se ha enviado correctamente";
        }
    }
    ?>
    <main>
        <section>
            <div class="registrarte">
                <h1>Contacto</h1>
                <form action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="post">
                    <div>
                        <label>Nombre: </label>
                        <input type="text" name="nombre">
                    </div>
                    <div>
                        <label>Asunto</label>
                        <input type="text" name="asunto">
                    </div>
                    <div>
                        <label>Correo Electronico:</label>
                        <input type="text" name="correo">
                    </div>

                    <div>
                        <label>Mensaje:</label>
                        <textarea name="mensaje" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="Enviar">
                    <button type="reset"></button>
                </form>
            </div>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>

</html>