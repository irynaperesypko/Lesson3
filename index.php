<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo 'посчитать длину массива [1, 2, 3, 7, 31, 4, 1, 8, 6] =';
echo count($arr);
echo "</br>";
echo 'переместить первые 4 элемента массива [1, 2, 3, 7, 31, 4, 1, 8, 6] в конец массива = ';
$part1=array_slice($arr,0, 4);
$part2=array_slice($arr, 4, count($arr));
$result=array_merge($part2,$part1);
echo '[';
foreach ($result as $value){
    echo $value.',';
};
echo ']';
echo "</br>";
echo 'получить сумму 4,5,6 элемента массива [1, 2, 3, 7, 31, 4, 1, 8, 6] = ';
 $part3=array_slice($arr, 3, 3);
 echo array_sum($part3);







