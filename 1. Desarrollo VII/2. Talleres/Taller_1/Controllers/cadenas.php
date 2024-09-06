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


#endregion


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

#region Problema #7

// Controla en que momento empieza a repetirse el programa.
function DisplayForm()
{
    session_start();
    if (isset($_POST['submit']) && (!empty($_SESSION['response'])))
        Repeater();

    else
    {
        BuildFormDefault();
        $_SESSION['response'] = "yes";
    }
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Controla las repeticiones.
function Repeater()
{

    // Se asegura de que la respuesta guardada en _POST sea transferida a _SESSION
    if (!empty($_POST['response']))
        $_SESSION['response'] = $_POST['response'];
            
        // Si en la session, se encuentra guardada la respuesta "yes",
        // procede a mostrar el formulario de repeticion.
        // Si la respuesta es "No", procede con el formulario que termina la ejecución.
        if ((isset($_SESSION['response'])) && ($_SESSION['response'] == "yes") )
            BuildFormYes();

        elseif ((isset($_SESSION['response'])) && ($_SESSION['response'] == "no") )
        {

            // Borra los datos de la sesion y la destruye.
            session_unset();
            session_destroy();

            BuildFormNo();

        }

}

#endregion


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

#region formularios
// Formulario para respuesta positiva.
function BuildFormYes()
{
    ?>

        <form method = "POST">

            <p>
                ¿Desea Continuar?<br><br>
            </p>

            <div>

                <label>
                    
                    Si<input class = "rb" type = "radio" name = "response" value = "yes" checked>  

                </label>

                <label>
                    
                    No<input class = "rb" type = "radio" name = "response" value = "no">
            
                </label>

            </div>

            <button type="submit" name="submit">SIGUIENTE</button>
        </form>

    <?php
}


// Formulario para respuesta negativa.
function BuildFormNo()
{
    ?>

        <form method = "POST">

            <p>
                PROGRAMA TERMINADO
            </p>

            <button type="submit" name="submit">REINICIAR</button>
        </form>

    <?php
}


// Formulario default.
function BuildFormDefault()
{
    ?>

        <form method = "POST">

            <p>
                Programa que se repite
            </p>

            <button type="submit" name="submit">INICIAR</button>
        </form>

    <?php


}

#endregion


?>