<?php
require_once "Calculator.php";
$Calculator = new Calculator();
$Calculator->calc("/", 10, 0);
$Calculator->calc("*", 10, 2);
$Calculator->calc("/", 10, 2);
$Calculator->calc("-", 10, 2);
$Calculator->calc("+", 10, 2);
$Calculator->calc("*", 10);

?>

