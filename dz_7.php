<?php
//ДЗ Вводится номер дня недели(1-7), с помощью
//тернарного оператора выдать ответ, является ли 
//введенный день выходным.

$day = +readline('Введите номер дня недели (1-7): ');
$res = $day >= 1 && $day < 6 ? 'будний' : 'выходной';
echo "Этот день $res";
?>