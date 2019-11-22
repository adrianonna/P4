<?php
namespace Date;

class Format
{
  public static function long($date)
  {
    $dates = ['01'=>"janeiro", '02'=>"fevereiro", '04'=>"abril"];
    $arrayDate = explode('/', $date);
    $novaData = $arrayDate[0]." de ".$dates[$arrayDate[1]]." de ".$arrayDate[2];
    print_r($novaData);
  }
}
Format::long("22/04/1983");