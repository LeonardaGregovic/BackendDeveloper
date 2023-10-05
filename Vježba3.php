<?php

$a = 8;
$b = 10;
$c = 18;

if ($b > $a && $b < $c || $b > $c && $b < $a) {
  
    echo "$b is in between $a and $c\n";

 
}
else {

    echo "$b is NOT in between $a and $c\n";
}
