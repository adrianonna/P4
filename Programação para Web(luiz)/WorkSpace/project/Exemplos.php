<?php
// $data = "Two Ts and one F.";
// $array = count_chars($data, 1);
// foreach ($array as $i => $val) {
//    echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
//    if (chr($i)=="o"){ //mostra quantas letras o existe na string
//     echo $val." letras ".chr($i);
//     print"\n";
//    }
// }
// print_r($array);



// // junta os elementos do array em uma string separando pela vírgula cada elemento
// $array = array('lastname', 'email', 'phone');
// $comma_separated = implode(",", $array);
// var_dump($comma_separated); //string
// print "\n";
// //separa a string em elementos de array pela vírgula, excluindo o último
// $arrayPalavras = explode(",", $comma_separated, -1);
// print_r($arrayPalavras);
// $qtdeElementos = count($arrayPalavras); //conta a quantidade de elementos no array
// var_dump($qtdeElementos);
// // pega o array e junta numa string, separando os elementos por vírgula
// $junto = implode(",", $arrayPalavras);
// print $junto;



// $var = "18:1;17:2;16:3;15:4;14:5;13:6;12:7;11:8";
// $arrayPrincipal = explode(';', $var); //retorna array com elementos separados por ponto e virgula
// foreach($arrayPrincipal as $value){ 
//     $arrayPosicao = explode(':', $value); //separa elementos(18:1, 17:2...) pelo dois pontos
//     $primeiroValor[] = $arrayPosicao[0]; //coloca no array o elemento 0(18, 17...)
//     $segundoValor[] = $arrayPosicao[1]; //coloca no array o elemento 1(1, 2...)
// }
// var_dump($primeiroValor);
// var_dump($segundoValor);



//verifica se existe a string e retorna o indice da primeira posição
// $mystring = 'abcdef';
// $findme   = 'ab';
// $pos = strpos($mystring, $findme);
// echo $pos;
// print "\n";
// if ($pos === false){
//     echo "não existe";
// } else {
//     echo "Achei! Indice ".$pos." letra ".$mystring[$pos];
// }



// $rest = substr("abcdefgh", 0, -1);  // começa do inicio e vai até o penultimo(-1)
// var_dump($rest);
// $rest = substr("abcdefgh", 2, 5);  // começa no indice 2 e conta 5 a partir do indice 2
// var_dump($rest);
// $rest = substr("abcdefgh", 2, -1);  // começa no 'c'(indice 2) e vai até o penultimo(-1)
// var_dump($rest);
// $rest = substr("abcdefgh", 4, -4);  //false, o valor começa depois da onde termina
// var_dump($rest);
// $rest = substr("abcdefgh", -3, -1); // começa do 'd'(3 do fim para o inicio) e vai até o penultimo(-1)
// var_dump($rest);



// $str = "6720 RJ - Galeão(GIG)";
// var_dump(strpos( $str, '(' ));
// echo substr( $str, strpos( $str, '(' ) + 1, 3 );
// echo substr( $str, 18, 3 ); //a partir do indice 18, conta 3



// $entry = array(
//     0 => 'foo',
//     1 => false,//false
//     2 => -1,
//     3 => null,//false
//     4 => '',//false
//     5 => 10
//  );
// print_r(array_filter($entry));



// $array = array(1, 2, 1, 2, 1, 3, 2, 5, "Ola", "Ola", "Mundo");
// sort($array);
// $elemArray = array_count_values($array); //Passa array, retorna qtde de elemetos de cada valor
// print_r($elemArray);
// $array2 = count_chars("Hello Mundo !", 1); //Passa string, retorna qtde de cada caracter
// print_r($array2);
// foreach ($array2 as $key => $value) {
//     echo chr($key);
//   }
// print "\n";
// foreach ($array2 as $key => $value) {
//   echo "A string possui ".$value." letras ".chr($key);
//   print "\n";
// }



// //Simulado StringUtil
// class StringUtil{
//     function repeatedString($s, $n): int
//     {
//         $string_repetida = str_repeat($s, $n);
//         $arr = str_split($string_repetida, $n);
//         $arr2 = str_split($arr[0]);
//             if (!in_array("a", $arr2)){
//                 return 0;
//             }
//         return substr_count($arr[0], 'a'); //passa duas strings e verifica
//     }
// }
// print(StringUtil::repeatedString('aba', 10));



// //simulado StringUtil
// function mirrorSequence($a, $b)
// {
//     $seqString = "";
//     for ($i = $a; $i <= $b; $i++) { 
//         $seqString .= $i;
//     }
//     $revString = strrev($seqString);
//     return $seqString.$revString;
// }
// print(mirrorSequence(10,13));



// //simulado StringUtil
// function zeroMeansZero($a, $b)
// {
// $soma = (string)($a+$b);
// $pos = str_replace("0", "", $soma);
// return $pos;
// }
// print(zeroMeansZero(7, 8));



// //simulado SockMerchant
//   function sockMerchant($socks): int //diz que retorna um int
//   {
//     sort($socks);
//     $array = array_count_values($socks);
//     $qtde=0;
//     foreach ($array as $key => $value) {
//       $inte = (int)($value / 2); //ou floor no lugar de (int)
//       $qtde += $inte;
//     }
//     return (int)$qtde;
//   }
//   var_dump(sockMerchant([1, 2, 3]));
//   var_dump(sockMerchant([1, 2, 1, 2, 1, 3, 2]));
//   var_dump(sockMerchant([10, 20, 20, 10, 10, 30, 50, 10, 20, 30, 10]));



// //simulado Date
// class Format
// {
//   function long($date)
//   {
//     $dates = ['01'=>"janeiro", '02'=>"fevereiro", '04'=>"abril"];
//     $arrayDate = explode('/', $date);
//     $novaData = $arrayDate[0]." de ".$dates[$arrayDate[1]]." de ".$arrayDate[2];
//     print_r($novaData);
//   }
// }
// Format::long("22/04/1983");



// //simulado Grammar
// class Grammar
// {
//   public static function spelling($word)
//   {
//     $stringJunta = str_replace(' ', '', $word);
//     $index = 0;
//     $NovaString = '';
//     while ($index < strlen($stringJunta)) {
//       $NovaString .= $stringJunta[$index].'-';
//       $index++;
//     }
//     $final = substr($NovaString, 0, -1);
//     $finalFinal = strtoupper($final);
//     print_r($finalFinal);
//   }
// }
// Grammar::spelling('o dia está chuvoso');



// function maisRep($array){
//     $arraySeparado = array_count_values($array);
//     //var_dump($arraySeparado);
//     foreach ($arraySeparado as $key => $value) {
//         $maior = $value;
//         $aux = $maior;
//         if ($value > $maior){
//         }
//     }
//     return $maior;
// }
// print(maisRep([1,1,2,2,2,2,3,3,3,4,5]));





// function codCaracter($a){
//     $array = count_chars($a, 1);
//     $soma = 0;
//     foreach ($array as $key => $value) {
//         if($value > 1){
//             $soma += $key * $value;
//         }else{
//             $soma += $key;
//         } 
//     }
//     return $soma;
// }
// print(codCaracter("ifpb"));


//prova 2
function pokemon($pokemons){
$arrayPokemon = array_unique($pokemons);
$tirar = count($arrayPokemon);
$faltam = 151 - $tirar;
return $faltam;
}
$pokemons = ['Charmander', 'Caterpie', 'Pidgeot', 'Rattata', 'Zubat', 'Zubat', 'Zubat'];
$pokemons2 = ['Zubat', 'Charmander', 'Caterpie', 'Pidgeot'];
$pokemons3 = ['Zubat', 'Pikachu', 'Pikachu'];
$pokemons4 = ['Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat'];
$pokemons5 = ['Zubat'];
print(pokemon($pokemons));

