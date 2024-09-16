<?php

namespace App\Models;

use Core\Model;

/*
* 
*
*
*
*
*
*
*
*/
class Interact extends Model
{

    // Picks the best method depending on the array's content.
    public function sortData(array $data, string $key, float $currency)
    {

        (int) $flag = count(array_filter($data, 'is_array'));
        (string) $result = null;

        $result = ($flag > 0) ? $this->solveMatrix($data, $key, $currency) : 
                                $this->solvePairs($data, $key, $currency);

        return $result;
    }


///////////////////////////////////////////////////////////////////////////////

    // Looks for matching data in an associative array.
    private function solvePairs(array $source, string $filter, float $money)
    {

        (int) $pair = intval($this->cleanse($source[$filter]));
        (float) $budget = $money * ($pair * 0.01);

        return "$money|$filter|$pair|$budget";

    }
    
///////////////////////////////////////////////////////////////////////////////

    // Looks for matching data in a Bi-Dimensional array.
    private function solveMatrix(array $source, string $filter, float $money)
    {

        $multipliers = [];
        (string) $message = "";
        (float) $operator = null;
        (float) $budget = $money;
        (int) $key = array_search($filter, $source[0]);

        foreach($source as $column => $data)
        {
            if ($column == 0)
                continue;

            if (isset($data[$key]))
            {
                array_push($multipliers, substr($data[$key], 0, -1));
                $message .= substr($data[$key], 1) . "|";
            }
        }
        
        foreach($multipliers as $modifier)
        {
            $operator = floatval($this->cleanse($modifier));

            if ($operator < 0) 
                $budget -= $budget * (abs($operator) * 0.01);
            elseif ($operator > 0)
                $budget += $budget * (abs($operator) * 0.01);
        }

        return "$money|$filter|$message|$budget";

    }

}

?>