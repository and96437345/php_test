<?php
// Программа "Брать ли зонтик".​
// Вводится тип погоды - дождь(rainy), облачно(cloudly) или солнечно(sunny) и шанс дождя в процентах(от 0 до 100)
// Если идет дождь, то вывести "берем зонтик​".
// Если облачно и шанс дождя выше 20%, то вывести "берем зонтик​". 
// Если солнечно и шанс дождя выше 50%, то вывести "берем зонтик​".
// В других случаях вывести "не берем зонтик​".

$weaterType = readline('Введите тип погоды - дождь(rainy), облачно(cloudly) или солнечно(sunny): ');
$rainPos = +readline('Введите шанс дождя в процентах(от 0 до 100): ');
if($weaterType == 'rainy' || ($weaterType == 'cloudly' && $rainPos > 20) || ($weaterType == 'sunny' && $rainPos > 50)){
    echo 'берем зонтик';
} else {
    echo 'не берем зонтик';
}

?>