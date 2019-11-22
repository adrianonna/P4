<?php

namespace CharCode;

class CharCode
{
  public static function sum($s)
  {
    $array = count_chars($a, 1);
    $soma = 0;
    foreach ($array as $key => $value) {
        if($value > 1){
            $soma += $key * $value;
        }else{
            $soma += $key;
        } 
    }
    return $soma;
  }
}
