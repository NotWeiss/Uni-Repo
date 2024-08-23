<?php

function CalcularDiametro($input)
{
    $radio = $input;
    $pi = pi();
    $area = $pi * ($radio ** 2) ;
    $perimetro = 2 * $pi * $radio;

    //return 
}

function ConvertirPulgada($input)
{
    $pulgada = $input;
    $centimetro = $pulgada * 2.54;

    //return 
}

?>