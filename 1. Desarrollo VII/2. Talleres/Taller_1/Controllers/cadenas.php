<?php
#region Funciones Auxiliares

// Elimina todos los caracteres a excepcion de numeros("0-9") y espacios(" ").
function SanitizeString($rawString)
{

    $_rawString = $rawString;
    $filter = '/[^\d\s.]/';
    //$flag= "Datos Limpios: ";

    
    $newString = preg_match($filter, $_rawString) ? preg_replace($filter, " ", $_rawString) : $_rawString;
    
    /*if ($newString != $rawString)
        echo "$flag $newString<br>";*/

    return $newString;

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Convierte una cadena previamente sanitizada en un arreglo de enteros. *USAR PARA EL PRIMER PROBLEMA*
function toArray($string)
{

    $_string = $string;

    // Transforma la cadena en un arreglo de Integers utilizando los espacios como separador.
    $newArray = array_map('intval', explode(" ", SanitizeString($_string)));
    /*echo "Datos Reparados";
    print_r($newArray);*/

    return $newArray;

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Procesa, sanitiza y convierte una cadena en un valor entero. 
function SingleInt($string)
{

    $_string = $string;

    // Llama a la funcion sanitizar y transforma la cadena a Integer.
    $newString = (int)SanitizeString($_string);
    /*echo "Datos Reparados";
    print_r($newString);*/

    return $newString;

}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function SingleString($string)
{

    $filter = '/[^a-zA-Z]/';
    $_string = preg_match($filter, $string) ? preg_replace($filter, " ", $string) : $string;
    $_string = strtolower($_string);
    
    return $_string;

}


#endregion


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function DisplayForm()
{

    echo '
    <form method="post">';
        if(isset($_POST['submit']))
        {
            echo '
            
            <label for="continue">¿Desea Continuar? ("si"/"no")</label>

            ';
        }
        else
        {
            echo '
            
            <label for="continue">¿Desea Iniciar? ("si"/"no")</label>

            ';
        }
    echo '
        <input type="text" id="continue" name="continue">
        <button type="submit" name="submit">Enviar</button>
    </form>

    ';
        

}

?>