<?php

function minimum($array) 
{
    $menor = $array[0];
    foreach ($array as $index => $value){
        if ($array[$index] < $menor){
            $menor = $array[$index];
        }
    }
  return $menor;
}

function maximum($array) 
{
    $maior = $array[0];
    foreach ($array as $index => $value){
        if ($array[$index] > $maior){
            $maior = $array[$index];
        }
    }
    return $maior;
}

function rangeValues($length, $last=0, $step=0)
{

  if ($last != 0){
    $final = $last;
  }
  else{
    $final = $last;
  }

  


  $inicio = $length ? $last : $length;
  $final = $last
  $pulo
}

function zip(...$arrays) 
{
  // TODO
}

function uniq($array) 
{
  // TODO
}

function sortNum($array) 
{
  sort($array);
  return $array;
} 