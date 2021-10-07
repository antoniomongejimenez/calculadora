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

    function calcular($x, $y, $oper)
    {
        switch ($oper) {
            case 'suma':
                $res = $x + $y;
                break;

            case 'resta':
                $res = $x - $y;
                break;

            case 'mult':
                $res = $x * $y;
                break;

            case 'div':
                $res = $x / $y;
                break;

            default:
                $res = null;
                break;
        }

        return $res;
    }
    

    $error = [];

    $x = filtrar_numero('x');
    $y = filtrar_numero('y');
    $oper = filtrar_opciones('oper', ['suma', 'resta', 'mult', 'div']);

    mostrar_errores($error)

    ?>

    <?php if (empty($error)):
        $res = calcular($x, $y, $oper) ?>
        <p>El resultado es <?= $res ?></p>
    <?php endif ?>


    <a href="index.html">Volver</a>

</body>
</html>