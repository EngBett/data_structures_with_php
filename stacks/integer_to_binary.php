<?php
require_once "Stack.php";

function get_binary($int){
    $str = "";
    $stack = new Stack();
    while ($int!=0){
        $bin = $int%2;
        $stack->push((string)$bin);
        $int = (int)($int/2);
    }

    while(!$stack->is_empty()){
        $str .= $stack->pop();
    }

    return $str;
}

//test with an integer
print_r(get_binary(142));

//new lines
print_r("\n\n");

//binary string to integer test
print_r(bindec(get_binary(142)));