<?php

namespace PokemonCollection;

class PokemonCollection
{
  public static function notCaptured($pokemons)
  {
    $arrayPokemon = array_unique($pokemons);
    $tirar = count($arrayPokemon);
    $faltam = 151 - $tirar;
    return $faltam;
  }
}
