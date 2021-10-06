<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
    

    function filtrar_numero($par) //&$x se manda por referencia en vez de por valor 
    {
        global $error;

        $val = null;

        if (isset($_GET[$par])):
            $val = trim($_GET[$par]);
            if (!is_numeric($val)):
                $error[] = "El parametro $par no es correcto.";
            endif;
        else:
            $error[] = "Falta el valor $par";
        endif;

        return $val;
    }


    function filtrar_opciones($par, $opciones)
    {
        global $error;

        $val = null;

        if (isset($_GET[$par])):
            $val = trim($_GET[$par]);
            if (!in_array($val, $opciones)):
                $error[] = "El parametro $par no es correcto.";
            endif;
        else:
            $error[] = "Falta el valor $par";
        endif; 

        return $val;
    }

    function mostrar_errores($error) {
        foreach($error as $err): ?>
            <p>Error: <?= $err ?></p>
        <?php 
        endforeach;
    }

    $error = [];

    $x = filtrar_numero('x');
    $y = filtrar_numero('y');
    $oper = filtrar_opciones('oper', ['suma', 'resta', 'mult', 'div']);

    mostrar_errores($error)

    ?>


    <?php if (empty($error)):
        switch($_GET['oper']) {
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

    <a href="index.html">Volver</a>

</body>
</html>