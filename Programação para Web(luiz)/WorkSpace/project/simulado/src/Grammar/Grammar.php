<?php
namespace Grammar;

class Grammar
{
  public static function spelling($word)
  {
    $stringJunta = str_replace(' ', '', $word);
    $index = 0;
    $NovaString = '';
    while ($index < strlen($stringJunta)) {
      $NovaString .= $stringJunta[$index].'-';
      $index++;
    }
    $final = substr($NovaString, 0, -1);
    $finalFinal = strtoupper($final);
    print_r($finalFinal);
  }
}
Grammar::spelling('o dia está chuvoso');