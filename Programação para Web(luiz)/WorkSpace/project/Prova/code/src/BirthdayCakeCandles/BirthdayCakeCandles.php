<?php

namespace BirthdayCakeCandles;

class BirthdayCakeCandles
{
  public static function blowOut($candles)
  {
    $aux = array_count_values($candles);
    var_dump($aux);
    $maiorValor = max($aux);
    var_dump($maiorValor);
    foreach ($aux as $key => $value) {
      if ($maiorValor == $value){
        var_dump($key);
      }
    }
  }
}

//BirthdayCakeCandles::blowOut([1, 1, 1, 3]);
 BirthdayCakeCandles::blowOut([1, 3, 1, 3]);
// BirthdayCakeCandles::blowOut([1, 3, 3, 3]);
// BirthdayCakeCandles::blowOut([3, 2, 1, 3]);
// BirthdayCakeCandles::blowOut([18, 90, 90, 13, 90, 75, 90, 8, 90, 43]);