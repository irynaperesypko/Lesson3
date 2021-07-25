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
        'six' => [
            [
                'three' => 32,
                'foure' => 5,
                'five' => 12,
                'seven' => [
                    [
                        'three' => 32,
                        'foure' => 5,
                        'five' => 12,
                    ]
                ]]
        ],
    ],
    'ten' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
        'six' => [
            [
                'three' => 32,
                'foure' => 5,
                'five' => 12,
                'seven' => [
                    [
                        'three' => 32,
                        'foure' => 5,
                        'five' => 12,
                    ]
                ]]
        ],
    ]
];

echo 'получить общее количество элементов в массиве ';

function countItems(array $array)
{
    $count = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $count += countItems($value);
        } else {
            $count++;
        }
    }
    return $count;
}

$res = countItems($firstArr);
echo $res;























