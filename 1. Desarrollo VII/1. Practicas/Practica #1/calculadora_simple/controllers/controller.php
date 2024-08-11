<?php

// Convierte la cadena dada a un arreglo separando cada elemento por los [Espacios].
function StringHandler($_val)
{
    $opp = explode(" ", $_val);
    return $opp;
}

function Operator($val)
{
    // Llama a la funcion stringHandler y le pasa la operacion como argumento.
    $operacion = StringHandler($val);

    // Compara el segundo elemento del arreglo $operacion y realiza la operación matemática del mismo.
    switch ($operacion[1])
    {
        case '+':
            $resultado= (float)$operacion[0] + (float)$operacion[2];
            $tipo= "La suma ";
            break;

        case '-':
            $resultado= (float)$operacion[0] - (float)$operacion[2];
            $tipo= "La resta ";
            break;

        case '*':
            $resultado= (float)$operacion[0] * (float)$operacion[2];
            $tipo= "La multiplicación ";
            break;

        case '/':
            $resultado= (float)$operacion[0] / (float)$operacion[2];
            $tipo= "La división ";
            break;

        case '**':
            $resultado= (float)$operacion[0] ** (float)$operacion[2];
            $tipo= "La potencia ";
            break;
        
        case '%':
            $resultado= (float)$operacion[0] % (float)$operacion[2];
            $tipo= "El residuo ";
            break;

        default:
            $resultado= "Operación No Valida";
    }

    // Imprime el resultado de la operación. Además, reutiliza la variable $resultado.
    return $resultado = "$tipo: $operacion[0] $operacion[1] $operacion[2] es = $resultado";
}

?>