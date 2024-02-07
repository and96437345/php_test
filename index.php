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


function nbYear($p0, $percent, $aug, $p) {
  $year = 0;
  $people = $p0;
  do {
    $people += floor($people*$percent/100 + $aug);
    $year++ ;
  } while ($people < $p);
  return $year;
}

// echo nbYear(1500000, 2.5, 10000, 2000000);

echo isSquare(-1);

function isSquare($n){
  return (sqrt($n) == floor(sqrt($n)) ? true : false);
  // if (sqrt($n) == floor(sqrt($n))) {
  //   return true;
  // };
  // return false;
}

function disemvowel($string) {
  $newString = '';
  $letters = 'aeiouAEIOU';
  for ($i=0; $i < strlen($string); $i++) {
    $counter = 0;
    for ($j=0; $j < 10; $j++) {
      $counter += substr_count($string[$i], $letters[$j]);
    }
    if($counter == 0){
      $newString .= $string[$i];
    } 
  }
  return $newString;
}
// disemvowel("No offense but,\nYour writing is among the worst I've ever read");

// function disemvowel($string) {
  
//   $string = str_ireplace(['a', 'e', 'i', 'o', 'u'], '', $string);
  
  
//   return $string;
// }

function comp($a1, $a2) {
  if($a1 == null || $a2 == null) return true;
  foreach ($a1 as $i => $value1) {
    $sqr = $value1**2;
    $counter = 0;
    foreach ($a2 as $j => $value2) {
      if($value2 == $sqr){
        $counter++ ;
      }
    }
    if($counter == 0) return false;
  }
  return true;
} 

echo comp(
  [],
  []
);

