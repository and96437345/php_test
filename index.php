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

// echo comp([],[]);

function wave($people){
  $arr = [];
  for ($i=0; $i < strlen($people) ; $i++) { 
    $people[$i] = strtoupper($people[$i]);
    if ($people[$i] != ' '){
      $arr[] = $people;
    }
    $people[$i] = strtolower($people[$i]);
  }
  return $arr;
  // echo implode(" ",$arr);

}
// wave('hello world');

function getMiddle($text) {
  $length = strlen($text);
  $out = '';
  if ($length % 2 == 0) {
    $out = $text[$length / 2 - 1];
    $out .= $text[$length / 2];
  } else {
    $out = $text[($length - 1) / 2];
  }
  return $out;
}
// echo getMiddle('an');

function count_smileys($arr) {
  $good = ')D';
  $bad = 'o(>}]';
  $count = 0;
  foreach ($arr as $key => $string) {
    $length = strlen($string);
    $count_good = 0;
    $count_bad = 0;
    for ($i=0; $i < $length; $i++) {
      for ($j=0; $j < 2; $j++) { 
      $count_good += substr_count($good[$j], $string[$i]);
      }
    }
    for ($i=0; $i < $length; $i++) {
      for ($j=0; $j < 4; $j++) { 
      $count_bad += substr_count($bad[$j], $string[$i]);
      }
    }
    $count += $count_good > 0 && $count_bad == 0 ? 1 : 0;
  }
  return $count;
}


// echo count_smileys([]);

function odd_or_even(array $a): string {
  $sum = 0;
  foreach ($a as $key => $value) {
    $sum += $value;
  }
  $res = $sum % 2 == 0 ? 'even' : 'odd';
  return $res;
}
// echo odd_or_even([1, 2, 3]);

// function odd_or_even(array $a): string {
//   return array_sum($a) % 2 ? 'odd' : 'even';
// }

