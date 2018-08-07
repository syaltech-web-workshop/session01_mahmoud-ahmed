<?php

$a = 5;
$b = 10;
//echo $a;

function x()
{
//    print_r("inside x func\n");
//    global $a, $b;
//    $b = $a + $b;
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

//print_r($GLOBALS['a']);
//
//echo "\n";
//
//x();
//
//echo $b;

function y()
{
    static $a = 1;
    echo $a;
    echo " before \n";
    $a++;
    echo $a;
    echo " after \n";
}

y();
y();
y();