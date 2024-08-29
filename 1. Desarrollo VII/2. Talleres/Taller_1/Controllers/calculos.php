<?php

#region Auxiliares
//FUNCION AUXILIAR. Se asegura de que el numero menor sea el origen y el mayor el final. En caso de ser iguales el valor1 es el origen y el valor2 el final.
function Order($value1, $value2)
{
    
    $_value1 = $value1;
    $_value2 = $value2;

    // si el valor1 es mayor al valor2 se guardaran los valores de manera contraria. si no, de manera normal.
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

#endregion

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

#region Otros

// Problema #1. Calcula la media de 5 numeros introducidos. Muestro 2 metodos.
function Average($data)
{

    $_data = $data;

    // Metodo #1.
    // Suma todos los elementos del arreglo y lo divide entre el largo del mismo.
    $method1 = array_sum($_data) / count($_data);

    // Metodo #2.
    // Repite el ciclo por cada elemento dentro del arreglo.
    $method2 = 0;
    foreach ($_data as $value)
    {
        $method2 += (int)$value;
    }

    $method2 = $method2 / count($_data);
        

    // Retorna una cadena con ambos resultados
    return $result = "Metodo #1: $method1 <br>Metodo #2: $method2";

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Problema #5. Imprime los N primeros multiplos de la base X.
function Multiples($base, $amount)
{

    $_base = $base;
    $_amount = $amount;
    $count= 1;

    while ($count < $amount)
    {
        $preResult= $_base * $count;
        $result += "$count.) $_base x $count = $preResult<br>";
        $count++;
    }

    return $result;

}

// Problema #8. Imprimir las primeras N potencias del numero X.
function PowerOf($base, $amount)
{

    $_base = $base;
    $_amount = $amount;
    $count= 1;

    while ($count < $amount)
    {
        $preResult= $_base ** $count;
        $result += "$count.) $_base ^ $count = $preResult<br>";
        $count++;
    }

    return $result;

}

#endregion

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

#region Sumas

// Problema #2. Suma todos los numeros dentro de un rango dictado por un origen y un final.
function RangeSum($value1, $value2)
{

    $order = Order($value1, $value2);

    $origin = $order[0];
    $finality = $order[1];


    // Metodo #1.
    // Formula para calcular la suma de numeros consecutivos dentro del rango [a-n].
    $method1 = ($finality * ($finality + 1) - $origin * ($origin - 1)) / 2;

    // Metodo #2.
    // Ciclo FOR desde origen hasta final acumulando todos los numeros dentro de aquel rango.
    $method2 = 0;
    for ($i = $origin; $i <= $finality; $i++)
        $method2 += $i;

    // Retorna una cadena con ambos resultados
    return $result = "Resultado del Metodo #1: $method1 <br> Resultado del Metodo #2: $method2";

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Problema #3 y Problema #4. Suma todos los numeros pares dentro de un rango dictado por un origen y un final.
function EvenNumbersSum($value1, $value2)
{

    $order = Order($value1, $value2);

    // Se aseguran de que los valores sean impares y esten dentro del rango.
    $origin = ($order[0] % 2) == 0 ? $order[0] : $order[0] + 1;
    $finality = ($order[1] % 2) == 0 ? $order[1] : $order[1] - 1;

    // Metodo #1.
    // Formula para calcular la suma de numeros pares consecutivos dentro del rango [a-n].
    $a = $origin / 2;
    $n = $finality / 2;

    $method1 = $n * ($n + 1) - $a * ($a - 1);

    // Metodo #2.
    // Ciclo
    $method2 = 0;
    for ($i = $origin; $i <= $finality; $i += 2)
        $method2 += $i;

    // Retorna una cadena con ambos resultados
    return $result = "Resultado del Metodo #1: $method1 <br> Resultado del Metodo #2: $method2";

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Problema #4. Suma todos los numeros impares dentro de un rango dictado por un origen y un final.
function OddNumbersSum($value1, $value2)
{

    $order = Order($value1, $value2);

    // Se aseguran de que los valores sean impares y esten dentro del rango.
    $origin = ($order[0] % 2) != 0 ? $order[0] : $order[0] + 1;
    $finality = ($order[1] % 2) != 0 ? $order[1] : $order[1] - 1;

    // Metodo #1.
    // Formula para calcular la suma de numeros impares consecutivos dentro del rango [a-n].
    $a = $origin - 1;
    $n = $finality + 1;

    $method1 = (($n / 2) ** 2) - (($a / 2) ** 2);

    // Metodo #2.
    // Ciclo
    $method2 = 0;
    for ($i = $origin; $i <= $finality; $i += 2)
        $method2 += $i;

    // Retorna una cadena con ambos resultados
    return $result = "Resultado del Metodo #1: $method1 <br> Resultado del Metodo #2: $method2";

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Problema #6. Suma de los numeros cuadrados de A hasta N.
function SquaredSum($value1, $value2)
{

    $order = Order($value1, $value2);

    $origin = $order[0];
    $finality = $order[1];
    
    // Metodo #1.
    // Formula para calcular la suma consecutiva de los numeros elevados al cuadrado dentro del rango [a-n].
    $a = $origin - 1;
    $n = $finality;

    $method1 = ($n * ($n + 1) * (2 * $n + 1)) - ($n * ($n + 1) * (2 * $n + 1)) / 6;

    // Metodo #2.
    // Ciclo
    for ($i = $origin; $i <= $finality; $i++)
        $method2 += i ** 2;

    // Retorna una cadena con ambos resultados
    return $result = "Resultado del Metodo #1: $method1 <br> Resultado del Metodo #2: $method2";

}

#endregion

?>