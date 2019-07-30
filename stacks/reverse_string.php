<?php
require_once "Stack.php";

function reverse_string($string){
    $new_str = str_split($string);
    $str = "";
    $stack = new Stack();
    foreach ($new_str as $item){
        $stack->push($item);
    }

    while (!$stack->is_empty()){
        $str .= $stack->pop();
    }

    return $str;

}

//test a string
print_r(reverse_string("Hello php stacks"));
