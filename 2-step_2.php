<?php

function greaterFn($num) {
   
    if($num < 10) {
        $result = "$num is less than 10";

    }
    else if($num < 20) {
        $result = "$num is greater than 10";
    }
    else if($num < 30) {
        $result = "$num is greater than 20";
    }
    else {
        $result = "$num is greater than 30";
    }
    echo "$result <br>";
}

greaterFn(33);
greaterFn(23);
greaterFn(13);
greaterFn(3); 