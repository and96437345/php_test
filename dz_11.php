<?php
//Пользователь вводит кол-во писателей.
//Программа запрашивает у человека писателя и его
//известную книгу и добавлять в массив.
//После пользователь вводит писателя, если он
//есть в списке, то программа выводит его книгу.
//Иначе выводит, что такого в списке нет.

$arr = [];
$writers = +readline('Введите количество писателей: ');
$writer_num = 0;

for ($i=0; $i < $writers; $i++) { 
    $writer_num++;
    $writer = readline("Введите имя $writer_num-го писателя: ");
    $book = readline('Введите наименование его книги: ');
    $arr[$writer] = $book;
}
$res = false;
$find_name = readline('Введите имя писателя для поиска: ');
foreach ($arr as $name => $find_book) {
    if($name == $find_name) {
        echo "Его книга: $find_book";
        $res = true;
    } 
}
if ($res === false) echo 'Нет такого в списке';

?>