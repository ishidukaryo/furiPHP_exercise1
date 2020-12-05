<?php
foreach(range( 1,100 ) as $int){
    if($int % 3 == 0){
        var_dump("アホ");
    } else {
        var_dump($int);
    }
}