<?php

require_once './incloud/calcInclude.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];


$calculator = new Calc($num1, $num2, $cal);

print $calculator->calcMethod();

?>
