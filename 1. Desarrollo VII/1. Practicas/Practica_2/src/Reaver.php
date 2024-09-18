<?php

namespace Core;

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
    public static function getData(string $location): array
    {
        include_once("../data/dump/$location.php");
        return $result;
    }

}
?>