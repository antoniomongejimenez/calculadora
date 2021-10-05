<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<?php if (isset($_GET['x'])):?>
        <p>El valor del parámetro x es: <?= $_GET['x'] ?></p>
    <?php else: ?>
        <p>No hay valor de x</p>
    <?php endif ?>

    <?php if (isset($_GET['y'])):?>
        <p>El valor del parámetro y es: <?= $_GET['y'] ?></p>
    <?php else: ?>
        <p>No hay valor de y</p>
    <?php endif ?>

    <?php if (mb_strlen($_GET['x']) > 0 and mb_strlen($_GET['y']) > 0 and isset($_GET['oper'])): ?>
        <?php switch($_GET['oper']) {
            case 'suma':
                $res = $_GET['x'] + $_GET['y'];
                break;
            case 'resta':
                $res = $_GET['x'] - $_GET['y'];
                break;
            case 'mult':
                $res = $_GET['x'] * $_GET['y'];
                break;
            case 'div':
                $res = $_GET['x'] / $_GET['y'];
                break;
            }?>
            <p>El resultado es <?= $res ?></p>
    <?php endif ?>

</body>
</html>