<?php
echo 'Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение' . "<br>";
function showType($value)
{
    return 'Type value is ' . gettype($value);
}

echo showType(5)
    . "<br>";

echo 'Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка 
функция должна возвращать false' . "<br>";
function countLetter($str)
{
    if (!is_string($str)) {
        return false;
    }
    return substr_count($str, 'b');

}

echo countLetter('bbbrrr');

function countSum(array $array)
{
    $count = 0;
    foreach ($array as $item) {

        if (is_array($item)) {
            $count += countSum($item);
        } else {
            $count += $item;
        }
    }
    return $count;
}

echo "<br>Создать функцию которая считает сумму значений всех элементов массива произвольной глубины <br>";
$arr = [6, 6, 5, [4, 4, 4, [4, 4, 2, [50]]]];
echo countSum($arr);
echo "<br>Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат 
большего размера размер возвращать в float<br>";

function occurrence($a, $b): float
{
    return ($a*$a)/($b*$b);
}

echo occurrence(5.0,2);

















