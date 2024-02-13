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

function solution ($roman) {
  $number = 0;
  $arr = [];
  for ($i=0; $i < strlen($roman); $i++) { 
    if ($roman[$i] == 'M'){
      $arr[] = 1000;
    }
    if ($roman[$i] == 'D'){
      $arr[] = 500;
    }
    if ($roman[$i] == 'L'){
      $arr[] = 50;
    }
    if ($roman[$i] == 'V'){
      $arr[] = 5;
    }
    if ($roman[$i] == 'C' && $roman[$i+1] == 'M'){
      $arr[] = 900;
      $i++;
    }
    if ($roman[$i] == 'C' && $roman[$i+1] == 'D'){
      $arr[] = 400;
      $i++;
    } elseif ($roman[$i] == 'C') {
      $arr[] = 100;
    }
    if ($roman[$i] == 'X' && $roman[$i+1] == 'C'){
      $arr[] = 90;
      $i++;
    }
    if ($roman[$i] == 'X' && $roman[$i+1] == 'L'){
      $arr[] = 40;
      $i++;
    } elseif ($roman[$i] == 'X') {
      $arr[] = 10;
    }
    if ($roman[$i] == 'I' && $roman[$i+1] == 'X'){
      $arr[] = 9;
      $i++;
    }
    if ($roman[$i] == 'I' && $roman[$i+1] == 'V'){
      $arr[] = 4;
      $i++;
    } elseif ($roman[$i] == 'I') {
      $arr[] = 1;
    }
  }
  $number = array_sum($arr);
  return $number;
}

// echo solution("MDCLXVI");
// function solution ($roman) {

//   $number = 0;
//   $roman_length = strlen($roman);
  
//   $arr = [
//     'I' => 1,
//     'V' => 5,
//     'X' => 10,
//     'L' => 50,
//     'C' => 100,
//     'D' => 500,
//     'M' => 1000,
//   ];
  
//   for ($i = 0; $i < $roman_length; $i++) {
    
//     if ($arr[$roman{$i}] < $arr[$roman{$i + 1}]) {
//       $number -= $arr[$roman{$i}];
//     } else {
//       $number += $arr[$roman{$i}];
//     }
//   }
  
//   return $number;
// }

function moveZeros(array $items): array
{
    $newArr = [];
    $count_zero = 0;
    foreach ($items as $key => $value) {
      if ($value === 0 || $value === 0.0){
        $count_zero++;
      } else {
        $newArr[] = $value;
      }
    }
    for ($i=0; $i < $count_zero; $i++) { 
      $newArr[] = 0;
    }
    return $newArr;
  }
// moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]);

// function alphabet_position(string $s): string {
  
//   $number = 0;
//   $string_length = strlen($string);
  
//   $arr = [
//     'a' => 1,
//     'b' => 5,
//     'c' => 10,
//     'd' => 50,
//     'e' => 100,
//     'f' => 500,
//     'g' => 1000,
//   ];
  
//   for ($i = 0; $i < $roman_length; $i++) {
    
//     if ($arr[$roman{$i}] < $arr[$roman{$i + 1}]) {
//       $number -= $arr[$roman{$i}];
//     } else {
//       $number += $arr[$roman{$i}];
//     }
//   }
  
//   return $number;
// }

function alphabet_position(string $s): string {
  $newString = '';
  for ($i=0; $i < strlen($s); $i++) { 
    $replace = find_pos($s[$i]);
    $newString .= $replace;
  }
  return trim($newString);
}
function find_pos($letter) {
  $string = 'abcdefghijklmnopqrstuvwxyz';
  $letter = strtolower($letter);
  $pos = strpos($string, $letter);
  if ($pos === false) {
    return;
  } else {
    $pos++;
    return "$pos ";
  }
}
// echo alphabet_position('The sunset sets at twelve o\' clock.');

function perimeter($n) {

  $perimeter = 0;
  for ($i=1; $i <= $n+1; $i++) { 
    $num = (int)((1.6180339887498948**$i - (1 - 1.6180339887498948)**$i )/sqrt(5));
    // $num = (int)round(((1+sqrt(5)**$i)-(1-sqrt(5)**$i))/2**$i*sqrt(5));
    $perimeter += $num * 4;
  }
  echo "$num ";
    return $perimeter;
}
// echo perimeter(7);

function generateHashtag($str) {
  if ($str[0] == '#') {
    return false;
  }
   $hashString = '#';
   $str = ucwords($str);
   $repl_sp = str_replace(' ', '', $str);
   if (strlen($repl_sp) > 140 || $str == '') return 0;
   $repl_dot = str_replace('.', '', $repl_sp);
   $hashString .= "$repl_dot";
   if ($hashString == '#') return false;
   return $hashString;
}
// echo generateHashtag(str_repeat(' ', 200));

function findMissing($list) {
  $step = 0;
if (abs($list[1] - $list[0]) <= abs($list[2] - $list[1])) {
  $step = $list[1] - $list[0];
  if ($step == 0 || count($list) <= 2) return null;
} else $step = $list[2] - $list[1];
for ($i=1; $i < count($list); $i++) {
  $dif = $list[$i-1] + $step;
  if ($list[$i] != $dif) {
    $list[0] = $dif;
    return $list[0];
  } 
}
return;
}
// echo findMissing([-1, -3, -5, -9, -11]);

function find_missing_letter(array $array): string {
  for ($i=0; $i < count($array); $i++) {
    $string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $position = strpos($string, $array[$i]);
    if ($position + 1 != strpos($string, $array[$i+1])){
      $find_pos = strpos($string, $array[$i+1]);
      return $string[$find_pos - 1];
    }
  }
}

// echo find_missing_letter(['A','B','D','E','F']);

function camel_case(string $s): string {
  $s = ucwords($s);
  $newString = str_replace(' ', '', $s);
  return $newString;
}

// echo camel_case('camel case method');

function beeramid($bonus, $price) {
  $cost = 0;
  $rows = 1;
  $cans = 0;
  while ($cost <= $bonus && $bonus > 0) {
    $cansInRow = $rows ** 2;
    $cans += $cansInRow;
    if ($cans * $price > $bonus) {
    $rows--;
    return $rows;
  }
  $rows++; 
  }
  return 0;
}

// echo beeramid(0, 0);

function alphanumeric(string $s) : bool {
  $alphanum = 'abcdefghijklmnopqrstuvwxyz0123456789';
  $s = strtolower($s);
  for ($i=0; $i < strlen($s); $i++) { 
    if (strpos($alphanum, $s[$i]) === false) return false;
  }
  return true;
}

// echo alphanumeric('Hello world');

function sum_strings($a, $b) {
  $a = (int)$a;
  $b = (int)$b;
  $sum = (string)($a + $b);
  echo "a = $a ";
  echo "b = $b ";
  return $sum;
}

// echo sum_strings('9223372036854775807','9223372036854775807');

function likes( $names ) {
  $members = count($names);
  $members_others = $members - 2;
  $out = match ($members) {
          0 => 'no one like this',
          1 => "$names[0] likes this",
          2 => "$names[0] and $names[1] likes this",
          3 => "$names[0], $names[1] and $names[2] like this",
          default => "$names[0], $names[1] and $members_others others like this"
        };
  echo $out;
}

// likes(["Alex", "Jacob", "Mark", "Max"]);

class Person {
  const species = 'Homo Sapiens';
  public $name;
  public $age;
  public $occupation;
  public function __construct($name, $age, $occupation){
    $this->name = $name;
    $this->age = $age;
    $this->occupation = $occupation;
  }
  public function introduce() {
    return "Hello, my name is $this->name";
  }
  public function describe_job() {
    return "I am currently working as a(n) $this->occupation";
  }
  static function greet_extraterrestrials($species) {
    return "Welcome to Planet Earth $species!";
  }
}

// $humanoid = new Person('Humanoid','37','Wega');
// print $humanoid->introduce();
// print $humanoid->describe_job();
// print $humanoid->greet_extraterrestrials('Martians');
