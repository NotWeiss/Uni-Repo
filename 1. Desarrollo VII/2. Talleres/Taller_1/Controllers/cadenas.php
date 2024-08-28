<?php
#region Funciones Auxiliares

// Elimina todos los caracteres a excepcion de numeros("0-9") y espacios(" ").
function SanitizeString($rawString)
{

    $_rawString = $rawString;
    $filter = '/[^\d\s]/';
    $flag= "Reparando Datos: ";

    
    $newString = preg_match($filter, $_rawString) ? preg_replace($filter, " ", $_rawString) : $_rawString;

    if ($newString != $rawString)
        echo "$flag $newString<br>";

    return $newString;

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Convierte una cadena previamente sanitizada en un arreglo de enteros. *USAR PARA EL PRIMER PROBLEMA*
function toArray($string)
{

    $_string = $string;

    // Transforma la cadena en un arreglo utilizando los espacios como separador.
    $provArray = explode(" ", SanitizeString($_string));
    
    return $provArray;

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Procesa, sanitiza y convierte una cadena en un valor entero. 
function singleInt($string)
{

    $_string = $string;

    // Llama a la funcion sanitizar.
    $provString = SanitizarCadena($_string);

    return $newString;

}

#endregion

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



?>