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
echo 'найти все элементы которые присутствую в первом и отсутствуют во втором = ';
$result = array_diff_assoc($firstArr, $secondArr);
print_r($result);
echo "</br>";
echo 'найти все элементы значения которых совпадают  ';
$result = array_intersect($firstArr, $secondArr);
print_r($result);
echo "</br>";
echo 'найти все элементы значения которых отличается = ';
$result = array_diff($firstArr, $secondArr);
print_r($result);
echo "</br>";
$arrResult = [];
foreach ($firstArr as $item=>$value) {
    echo $item."---".$value."</br>";
//    echo $value."</br>";

    if(!in_array($value,array_values($secondArr)))
    {
        $arrResult[$item]=$value;
    }
}
echo "</br>";

foreach ($secondArr as $item=>$value) {
    echo $item."---".$value."</br>";
//    echo $value."</br>";

    if(!in_array($value,array_values($firstArr)))
    {
        $arrResult[$item]=$value;
    }
}
echo "</br>";
echo "<pre>";
var_dump($arrResult);
echo "</pre>";


//var_dump(array_values($secondArr));
//foreach ($secondArr as $item=>$value)
//{
//    if(!in_array($value,$arrResult))
//    {
//        $arrResult[]=$item;
//    }
//}
//foreach ($arrResult as $value=>$item)
//{
//    echo $item."</br>";
//}
//var_dump($arrResult);
















