<?php
require 'character.php';

class Comic
{
  private static $characters = [];

public static function add($character){
  self::$characters[] = $character;
}

public static function names($hq = null){
$herois = [];
foreach (self::$characters as $value) {
  if (isset($hq)){
    if ($value->comic == $hq){
      $herois[] = $value->hero;
    } 
  }else{
    $herois[] = $value->hero;
  }
}
sort($herois, SORT_NATURAL | SORT_FLAG_CASE);
return $herois;
}
}
