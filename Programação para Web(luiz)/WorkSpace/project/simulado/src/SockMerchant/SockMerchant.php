<?php
namespace SockMerchant;

class SockMerchant
{
  public static function sockMerchant($socks)//: int //diz que retorna um int
  {
    sort($socks);
    $array = array_count_values($socks);
    $qtde=0;
    foreach ($array as $key => $value) {
      $inte = (int)($value / 2); //ou floor no lugar de (int)
      $qtde += $inte;
    }
    return (int)$qtde;
  }
}
var_dump(SockMerchant::sockMerchant([1, 2, 1, 2, 1, 3, 2]));
var_dump(SockMerchant::sockMerchant([10, 20, 20, 10, 10, 30, 50, 10, 20, 30, 10]));