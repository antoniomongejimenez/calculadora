<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
            require './auxiliar.php';

            $op1 = isset($_GET['op1']) ? trim($_GET['op1']) : null;
            $op2 = isset($_GET['op2']) ? trim($_GET['op2']) : null;
            $op = isset($_GET['op']) ? trim($_GET['op']) : null;

            $res = '';

            if (isset($op1, $op2, $op)) {
                $error = false;
                if (!is_numeric($op1)) {
                    $error = error('El primer operando no es un numero.');
                }
                if (!is_numeric($op2)) {
                    $error = error('El segundo operando no es un numero.');
                }
                if ($op != '+' && $op != '-' && $op != '*' && $op != '/') {
                    $error = error('El operador no es válido.');
                }

                if (!$error) {
                    $res = calcular($op1, $op2, $op);
                }
            }
        ?>

        <form action="" method="get">
            <label for="op1">Primer operando:</label>
            <input type="text" name="op1" value="<?= $op1 ?>" id="op1"><br>
            
            <label for="op2">Segundo operando:</label>
            <input type="text" name="op2" value="<?= $op2 ?>" id="op2"><br>

            <label for="op">Operacion:</label>
            <input type="text" name="op" value="<?= $op ?>" id="op"><br>

            <button type="submit">Calcular</button><br>

            <label for="resultado">Resultado</label>
            <input type="text" name="resultado" value="<?= $res ?>" id="resultado" readonly><br>
        </form>
    </body>
</html>