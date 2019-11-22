<?php
namespace String;

class StringUtil
{

  public static function repeatedString($s, $n): int
  {
    $string_repetida = str_repeat($s, $n);
    $arr = str_split($string_repetida, $n);
    $arr2 = str_split($arr[0]);
        if (!in_array("a", $arr2)){
            return 0;
        }
    return substr_count($arr[0], 'a');
  }

  public static function mirrorSequence($a, $b)
  {
    // TODO
  }

  public static function zeroMeansZero($a, $b)
  {
    // TODO
  }

  public static function numberOfLeds($number)
  {
    // TODO
  }
}
