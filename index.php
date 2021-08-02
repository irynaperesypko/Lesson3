<?php

include 'Car.php';
include 'Audi.php';
include 'Opel.php';
include 'Nissan.php';
include 'Juke.php';
include 'Primera.php';


$obj = new Juke();
$obj->setDiscount(10);
echo $obj->salePrice();


















