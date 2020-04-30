<?php
include '../BBDD/conexionBBDD.php';
include '../BBDD/usuariosBBDD.php';
include '../BBDD/funciones.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="../css/estilos_xs.css">
    <link rel="stylesheet" href="../css/sweetalert.css">

    <!--movil-->
    <link rel="stylesheet" media=" all and (min-device-width : 768px) and (max-device-width : 991px)" href="../css/estilos_sm.css">
    <!--IPAD vertical-->
    <link rel="stylesheet" media=" all and (min-device-width : 992px) and (max-device-width : 1199px) " href="../css/estilos_md.css">
    <!--IPAD horizontal-->
    <link rel="stylesheet" media=" all and (min-device-width : 1200px)" href="../css/estilos_lg.css">
    <!--monitor paronamico-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="sweetalert.min.js"></script>
    <!-- <script type="text/javascript" src="alerta.js"></script> -->


</head>

<body>

    <?php
    include '../header.php';
    ?>
    <main>
        <section>
            <?php
            if ($_POST) {
                registrarUsuarios();
            } else {
            ?>
                <div class="registrarte">
                    <h1>Registrate</h1>
                    <form action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="post">
                        <div>
                            <label>Nick: </label>
                            <input type="text" name="nick" placeholder="Nombre" <?php mostrar_campo('nick') ?> required>
                        </div>
                        <div>
                            <label>Contraseña: </label>
                            <input type="password" name="contrasena" placeholder="contraseña" <?php mostrar_campo('contrasena') ?> required>
                        </div>
                        <div>
                            <label>Repita contraseña: </label>
                            <input type="password" name="contrasena-repetida" placeholder="repite contraseña" <?php mostrar_campo('contrasena') ?> required>
                        </div>
                        <div>
                            <label>Correo Electronico:</label>
                            <input type="text" name="mail" placeholder="Introduzca su correo electronico" <?php mostrar_campo('mail') ?> required>
                        </div>

                        <button type="submit" name="registrar_usuario" id="Registrarse">Registrate</button>
                    </form>
                </div>
        </section>
    </main>

    <?php include "../footer.php"; ?>
    </div>
</body>

</html>
<?php
            }
?>