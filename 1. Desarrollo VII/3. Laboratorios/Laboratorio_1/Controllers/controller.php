<?php

function CalcularDiametro($input)
{
    $radio = $input;
    $pi = pi();
    $area = $pi * ($radio ** 2) ;
    $perimetro = 2 * $pi * $radio;

    $resultado = "Area: $area<br>Perimetro: $perimetro"

    echo $resultado;
}

function ConvertirPulgada($input)
{
    $pulgada = $input;
    $centimetro = $pulgada * 2.54;

    echo $centimetro;
}

?>