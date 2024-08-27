<?php

// Elimina todos los caracteres a excepcion de numeros("0-9"), espacios(" ") y puntos(".").
function SanitizeString($rawString)
{

    $_rawString = $rawString;
    $filter = '/[^\d\s.]/';
    $flag= "error";

    $newString = preg_match($filter, $_rawString) ? preg_replace($filter, $_rawString) : $_rawString;

    if ($newString != $rawString)
        echo $flag;

    return $newString;

}

// Convierte una cadena previamente sanitizada en un arreglo de flotantes o enteros. *USAR PARA EL PRIMER PROBLEMA*
function toArray($string, $allowFloat)
{

    $_string = $string;
    $_allowFloat = $allowFloat;

    // Transforma la cadena en un arreglo utilizando los espacios como separador.
    $provArray = explode(" ", SanitizarCadena($_string));

    // Verifica si se permite usar flotantes en la ejecucion actual y convierte los datos a flotante o entero dependiendo de la respuesta.
    $newArray = $_allowFloat ? array_map('floatval', $provArray) : array_map('intval', $provArray)

    return $newArray;

}

// Procesa, sanitiza y convierte una cadena en un valor flotante o entero. 
function singleInt($string, $allowFloat)
{

    $_string = $string;
    $_allowFloat = $allowFloat;

    // Llama a la funcion sanitizar.
    $provString = SanitizarCadena($_string);

    // Verifica si se permite usar flotantes en la ejecucion actual y convierte los datos a flotante o entero dependiendo de la respuesta.
    $newString = $_allowFloat ? floatval($provString) : intval($provString);

    return $newString;

}

?>