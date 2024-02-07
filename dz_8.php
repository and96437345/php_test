<?php
//ДЗ Вводится номер ноты, вывести ее название.
//Делать через switch/case.
//1 - До
//2 - Рэ
//3 - Ми
//4 - Фа
//5 - Соль
//6 - Ля
//7 - Си

$note = readline('Введите номер ноты: ');

switch ($note) {
    case 1:
        $res = 'До';
        break;
    case 2:
        $res = 'Ре';
        break;
    case 3:
        $res = 'Ми';
        break;
    case 4:
        $res = 'Фа';
        break;
    case 5:
        $res = 'Соль';
        break;
    case 6:
        $res = 'Ля';
        break;
    case 7:
        $res = 'Си';
        break;
    default:
        $res = 'не существует';
        break;
}
echo "Нота: $res";
?>