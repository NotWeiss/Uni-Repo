<?php

namespace Core;

/*
*
*/
abstract class Model
{

    // Wipes everything that's not a number.
    public function cleanse(string $value)
    {

        (string) $filter = '/[^\d\s.-]/';

        return preg_replace($filter, "", $value);

    }

}

?>