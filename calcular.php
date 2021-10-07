<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<?php
    require 'auxiliar.php';

    $error = [];

    $x = filtrar_numero('x', $error);
    $y = filtrar_numero('y', $error);
    $oper = filtrar_opciones('oper', OPER, $error);

    mostrar_errores($error)

    ?>

    <?php if (empty($error)):
        $res = calcular($x, $y, $oper) ?>
        <p>El resultado es <?= $res ?></p>
    <?php endif ?>


    <a href="index.html">Volver</a>

</body>
</html>