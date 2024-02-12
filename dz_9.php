<?php
//Написать конвертер валют с использованием match.
// Взять 5 валют. Ввести значение в исходной валюте.
// и перевести в выбранную.

define ('USD', 91.08);
define ('EUR', 98.15);
define ('AUD', 59.36);
define ('CAD', 67.67);
define ('CNY', 12.55);
echo "Конвертер валют\n";
$money = readline('Введите количество рублей для обмена: ');
$currency = readline('В какую валюту хотите перевести? USD, EUR, AUD, CAD, CNY: ');
$res = match ($currency) {
        'USD' => $money / USD,
        'EUR' => $money / EUR,
        'AUD' => $money / AUD,
        'CAD' => $money / CAD,
        'CNY' => $money / CNY,
        default => 'Неправильный ввод',
};
$res = round($res, 2);
echo "Можете купить $res $currency";
?>