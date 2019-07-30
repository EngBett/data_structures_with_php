<?php
require_once "Stack.php";

function matches($string){
    $stack = new Stack();
    $new_str = str_split($string);
    $opening_parentheses = ['{','[','('];

    foreach ($new_str as $char){

        if(in_array($char,$opening_parentheses)){

           $stack->push($char);

        }else{

            if(is_pair($stack->pop(),$char)){

                continue;

            }else{

                return false;

            }
        }
    }

    if($stack->is_empty()){

        return true;

    }

    return false;
}

function is_pair($popped, $current){
    if(
        ($popped =='{' && $current == '}')
            ||
        ($popped == '[' && $current == ']')
            ||
        ($popped == '(' && $current == ')')
    )
    {
        return true;
    }

    return false;
}

//test string 1
if(matches("{{[(())]}}")){
    print_r("Parentheses matches\n");
}else{
    print_r("Parentheses do not match");
}

//Test string 2
if(matches("{{[(())]")){
    print_r("Parentheses do not match");
}else{
    print_r("Parentheses do not match");
}
