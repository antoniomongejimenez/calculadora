<?php




function error($mensaje) 
{
    echo "<h3>Error: $mensaje</h3>";
    return true;
}

/**
 * calcular
 *
 * @param  mixed $op1
 * @param  mixed $op2
 * @param  mixed $op
 * @return void
 */

function calcular($op1, $op2, $op) 
{
    eval("\$res = \$op1 $op \$op2;");

    // switch ($op) {
    //     case '+':
    //         $res = $op1 + $op2;
    //         break;
    //     case '-':
    //         $res = $op1 - $op2;
    //         break;
    //     case '*':
    //         $res = $op1 * $op2;
    //         break;
    //     case '/':
    //         $res = $op1 / $op2;
    //         break; 
    //     }
    return $res;
}