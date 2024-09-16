<?php

namespace Data;

/*
*
*/

class Reaver
{
    /* 
    * Searches the location of the data asked for.
    * Options:
    *   - Hospital
    *   - Company
    */
    function getData(string $location)
    {
        include_once("./dump/$location.php");

        return $result;

    }

}
?>