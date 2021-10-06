<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php

    $error = [];

    if (isset($_GET['x'])):
        $x = trim($_GET['x']);
        if (!is_numeric($x)):
            $error[] = "El parametro x no es correcto.";
        endif;
        else:
            $error[] = "Falta el valor x";
    endif;

    if (isset($_GET['y'])):
        $y = trim($_GET['y']);
        if (!is_numeric($y)):
            $error[] = "El parametro y no es correcto.";
        endif;
        else:
            $error[] = "Falta el valor x";
    endif;

    if (isset($_GET['oper'])):
        $oper = trim($_GET['oper']);
        if (!in_array($oper, ['suma', 'resta', 'mult', 'div'])):
            $error[] = "El parametro oper no es correcto.";
        endif;
    else:
        $error[] = "Falta el valor x";
    endif; 
    ?>


    <?php foreach($error as $err): ?>
        <p>Error: <?= $err ?></p>
    <?php endforeach ?>


    <?php if (empty($error)): ?>
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
            }
        ?>
            <p>El resultado es <?= $res ?></p>
    <?php endif ?>

</body>
</html>