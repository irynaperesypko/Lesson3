<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo 'посчитать длину массива [1, 2, 3, 7, 31, 4, 1, 8, 6] =';
echo count($arr);
echo "</br>";
echo 'переместить первые 4 элемента массива [1, 2, 3, 7, 31, 4, 1, 8, 6] в конец массива = ';
$part1 = array_slice($arr, 0, 4);
$part2 = array_slice($arr, 4, count($arr));
$result = array_merge($part2, $part1);
echo '[';
foreach ($result as $value) {
    echo $value . ',';
};
echo ']';
echo "</br>";
echo 'получить сумму 4,5,6 элемента массива [1, 2, 3, 7, 31, 4, 1, 8, 6] = ';
$part3 = array_slice($arr, 3, 3);
echo array_sum($part3);
echo "</br>";
echo 'найти все элементы которые отсутствуют в первом массиве и присутствуют во втором ';
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
$result = array_diff_assoc($secondArr, $firstArr);
print_r($result);
echo "</br>";
echo 'найти все элементы которые присутствуют в первом и отсутствуют во втором = ';
$result = array_diff_assoc($firstArr, $secondArr);
print_r($result);
echo "</br>";
echo 'найти все элементы значения которых совпадают  ';
$result = array_intersect($firstArr, $secondArr);
print_r($result);
echo "</br>";
echo 'найти все элементы значения которых отличается ';
$result = [];
foreach ($firstArr as $value => $item) {
    if (!in_array($item, array_values($secondArr))) {
        $result[] = $item;
    }
}
foreach ($secondArr as $value => $item) {
    if (!in_array($item, array_values($firstArr))) {
        $result[] = $item;
    }
}
print_r($result);
echo "</br>";
echo 'получить все вторые элементы вложенных массивов';
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];
function getSecondElement($arr)
{
    $result = [];
    foreach ($arr as $value) {
        if (is_array($value)) {
            $result[] = array_slice(array_values($value), 1, 1);
            getSecondElement($value);
        }
    };
    return $result;
}

$res = getSecondElement($firstArr);
print_r($res);
echo "</br>";
echo 'получить общее количество элементов в массиве ';

function countItems(array $array)
{
    $count = 0;
    foreach ($array as $value) {
        $count++;
        if (is_array($value)) {
            $count += countItems($value);
        }
    }
    return $count;
}

$res = countItems($firstArr);
echo $res;
echo "</br>";
echo 'получить сумму всех значений в массиве ';
function countSum(array $array)
{
    $count = 0;
    foreach ($array as $value => $item) {

        if (is_array($item)) {
            $count += countSum($item);
        } else {
            $count += $item;
        }
    }
    return $count;
}
echo countSum($firstArr);






















