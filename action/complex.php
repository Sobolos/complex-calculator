<?php
require "../classes/complex.php";
use complex\complex;

$complex_1 = [
    "a_1" => (int)$_POST['a_1'],
    "b_1" => (int)$_POST['b_1'],
];

$complex_2 = [
    "a_2" => (int)$_POST['a_2'],
    "b_2" => (int)$_POST['b_2'],
];

$operation = $_POST['operation'];

$complex = new complex($complex_1, $complex_2);
$result = $complex->operate($operation);

echo json_encode($result);