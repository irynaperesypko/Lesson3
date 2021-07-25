<?php

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
        'ttt'=>[
            [
                'three' => 32,
                'foure' => 5,
                'five' => 12,
                'yyy'=>[
                    [
                        'three' => 1,
                        'foure' => 1,
                        'five' => 1,
                    ],
                ]
            ],
        ]
    ],
];

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
echo "<pre>";
print_r($firstArr);
echo "</pre>";
echo countSum($firstArr);






















