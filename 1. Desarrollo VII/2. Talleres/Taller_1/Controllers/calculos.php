<?php

//FUNCION AUXILIAR. Se asegura de que el numero menor sea el origen y el mayor el final. En caso de ser iguales el valor1 es el origen y el valor2 el final.
function Order($value1, $value2)
{
    $_value1 = $value1;
    $_value2 = $value2;

    if ($_value1 > $_value2)
    {
        $order[0] = $_value2;
        $order[1] = $_value1;
    }
    else
    {
        $order[0] = $_value1;
        $order[1] = $_value2;
    }

    return $order;
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



// Problema #1. Calcula la media de 5 numeros introducidos. Muestro 2 metodos.
function Average($data)
{

    $_data = $data;

    // Metodo #1.
    // Suma todos los elementos del arreglo y lo divide entre el largo del mismo.
    $method1 = array_sum($_data) / count($_data);

    // Metodo #2.
    // Repite el ciclo por cada elemento dentro del arreglo.
    foreach ($_data as $value)
    {
        $method2 += $value;
    }

    // Retorna una cadena con ambos resultados
    return $result = "Resultado del Metodo #1: $method1 <br> Resultado del Metodo #2: $method2";
}



// Problema #2. Suma todos los numeros dentro de un rango dictado por un origen y un final.
function RangeSum($value1, $value2)
{

    $order = Order($value1, $value2);
    $origin = $order[0];
    $finality = $order[1];

    // Metodo #1.
    // Formula para calcular la suma de numeros consecutivos dentro del rango [a-n].
    $method1 = ($finality * ($finality + 1) - $origin ($origin - 1)) / 2;

    // Metodo #2.
    // Ciclo FOR desde origen hasta final acumulando todos los numeros dentro de aquel rango.
    for ($i = $origin; $i <= $finality; $i++)
    {
        $method2 += $i;
    }

    // Retorna una cadena con ambos resultados
    return $result = "Resultado del Metodo #1: $method1 <br> Resultado del Metodo #2: $method2";
}



// Problema #3 y Problema #4. Suma todos los numeros pares dentro de un rango dictado por un origen y un final.
function EvenNumbersSum($value1, $value2)
{

    $order = Order($value1, $value2);
    $origin = $order[0];
    $finality = $order[1];

    // Metodo #1.
    // Formula.

    // Metodo #2.
    // Ciclo
    

}

function OddNumbersSum($value1, $value2)
{

    $order = Order($value1, $value2);
    $origin = $order[0];
    $finality = $order[1];

    // Metodo #1.
    // Formula.
    

    // Metodo #2.
    // Ciclo
    

}


?>