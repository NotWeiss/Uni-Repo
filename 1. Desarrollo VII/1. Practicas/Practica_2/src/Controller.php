<?php

namespace Core;

use Core\Reaver;
use App\Models\Interact;

/*
*
*/
abstract class Controller
{ 
    // Returns Reaver's getData Method.
    public static function collectData(string $source): array
    {
        return Reaver::getData($source);
    }

////////////////////////////////////////////////////////////////////////////    

    // Returns Interact's sortData Method.
    public static function processData(array $data, string $key,
                                       float $payment): string
    {
        return Interact::sortData($data, $key, $payment);
    }

}

?>