<?php

namespace Core;

/*
*
*/
abstract class Model
{

    // Wipes everything that's not a number.
    public function cleanse(string $value): string
    {
        (string) $filter = '/[^\d\s.-]/';
        return preg_replace($filter, "", $value);
    }

////////////////////////////////////////////////////////////////////////////

    /* 
    * Takes an array of Bonuses and Discounts; and an amount of Money.
    * Discount example: "-40%"
    */
    public function alterPayment(array $modifiers, float $money): float
    {

        foreach($modifiers as $value)
        {
            $operator = floatval($this->cleanse($value));

            if ($operator < 0) 
                $money -= $money * (abs($operator) * 0.01);
            elseif ($operator > 0)
                $money += $money * (abs($operator) * 0.01);
        }

        return $money;

    }

    
}

?>