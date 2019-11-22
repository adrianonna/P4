<?php
namespace teste;
function min($array):float
{
    $menor = $array[0];
    foreach ($array as $index => $value){
        if ($array[$index] < $menor){
            $menor = $array[$index];
        }
    }
    return $menor;
}