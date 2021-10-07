<?php
    const OPER = ['+', '-', '*', '/'];

    /**
     * filtra un parámetro recibido mediante GET, lo trimea y 
     * comprueba si es un número ( en caso contrario, devuelve null)
     * 
     * Actualiza el array de errores en caso necesario.
     *
     * @param  string       $par   El nombre del parámetro
     * @param  array        $error El array de errores.
     * @return string|null         El valor del parámetro o null si no es un numero.
     */

    function filtrar_numero(string $par, array &$error): ?string  
    {
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

    
    /**
     * filtrar_opciones Filtra las opciones de calculo (+,-,*, /) y si es 
     * incorrecta pasa los errores al array errores
     *
     * @param  string       $par   El nombre del parámetro
     * @param  array        $opciones El array de opciones.
     * @param  array        $error El array de errores.
     * @return string|null
     */

    function filtrar_opciones(
        string $par, 
        array $opciones, 
        array &$error
        ): ?string
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

    function mostrar_errores(array $error): void
    {
        foreach($error as $err): ?>
            <p>Error: <?= $err ?></p>
        <?php 
        endforeach;
    }

    

    function calcular(
        int|float|string $x, 
        int|float|string $y, 
        string $oper
        ): int|float|null
    {
        switch ($oper) {
            case '+':
                $res = $x + $y;
                break;

            case '-':
                $res = $x - $y;
                break;

            case '*':
                $res = $x * $y;
                break;

            case '/':
                $res = $x / $y;
                break;

            default:
                $res = null;
                break;
        }

        return $res;
    }