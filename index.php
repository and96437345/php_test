<?php
$string = 'xxooxxoo';
function XO($s) {
    $counterX = 0;
    $counterO = 0;
    $res = false;
  $length = strlen($s);
  for ($n = 0; $n < $length; $n++) {
      if($s[$n] === 'x' || $s[$n] === 'X'){
      $counterX++ ;
      }
      if($s[$n] === 'o' || $s[$n] === 'O'){
      $counterO++ ;
      }
  }
  echo $counterX;
  echo $counterO;
  if($counterX == $counterO){
    $res = true;
  }
    return $res;
  }
  // echo XO($string);

//   function XO($s) {
//     $lower = strtolower($s);
//     return substr_count($lower, 'x') === substr_count($lower, 'o');
//   }

$text = 'aaaxbbbbyyhwawiwjjjwwm';
function printerError($s) {
  $noColor = 'nopqrstuvwxyz';
  $counter = 0;
  for ($i=0; $i < 13; $i++) {
    $counter += substr_count($s, $noColor[$i]);
  }
  return $counter.'/'.strlen($s);
}
// echo printerError('aaaxbbbbyyhwawiwjjjwwm');

// function printerError($s) {
//   $errorCount = strlen(str_replace(range('a','m'), '', $s));
//   $totalCount = strlen($s);
  
//   return $errorCount.'/'.$totalCount;
// }

function DNA_strand($dna) {
  for ($i=0; $i < strlen($dna); $i++) {
    if ($dna[$i] == 'A' || $dna[$i] == 'T') {
      if($dna[$i] == 'A') $dna[$i] = 'T';
      else $dna[$i] = 'A';   
    }
    if ($dna[$i] == 'C' || $dna[$i] == 'G') {
      if($dna[$i] == 'C') $dna[$i] = 'G';
      else $dna[$i] = 'C';   
    }
  }
  return $dna;
}
// echo DNA_strand('ATTGC');
// echo DNA_strand('GTAT');

// function DNA_strand($dna) {
//   return strtr($dna, 'ACGT', 'TGCA');
// }
// function DNA_strand($dna) {
//   return strtr($dna, ['A'=>'T', 'T'=>'A', 'C'=>'G', 'G'=>'C']);
// }