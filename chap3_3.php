<?php
foreach(range( 1,100 ) as $int){
    switch ($int) {
        case ($int % 3 == 0 && $int % 5 == 0):
            echo"FizzBuzz" . "\n";
            break;
        case ($int % 3 == 0):
            echo"Fizz" . "\n";
            break;
        case ($int % 5 == 0):
            echo"Buzz" . "\n";
            break;
        default:
            echo"$int" . "\n";
    }
}