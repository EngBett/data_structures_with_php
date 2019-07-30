<?php
require_once "Stack.php";

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);

print_r($stack->pop()."\n");
//$stack->display();
print_r($stack->peek()."\n");
print_r($stack->size()."\n");