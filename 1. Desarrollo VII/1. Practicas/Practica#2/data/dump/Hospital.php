<?php

/* 
* Arrays by columns:
* Column #1: Area.
* Column #2: Percent.
*/
$area = ["Ginecologia", "Traumatologia", "Pediatria"];
$percent = ["40%", "35%", "25"]; 

// Associative Array. Combines Area and Percent into one Array.
$result = array_combine($area, $percent);

?>