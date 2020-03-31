<?php
session_start();
include '../BBDD/conexionBBDD.php';
include '../BBDD/peticiones.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../css/estilos_art.css">
    <script type="text/javascript" src="jsPDF-1.3.2/dist/jspdf.min.js"></script>
    <script src="../javascript/borrar_editar.js"></script>
    <script src="../javascript/FileSaver.js"></script>
    <script src="../javascript/jquery.wordexport.js"></script>
    <script src="../javascript/commonScripts.js"></script>
    <script type="text/javascript" src="../javascript/eventosBotones.js"></script>
</head>

<body>
    <?php
    include '../header.php';
    ?>

    <section>
    <div class="clientes">
        <?php
        include 'menuOpciones.php';
        verClientes();
        ?>
        </div>
    </section>
    <?php
    include '../footer.php';
    ?>
</body>

</html>