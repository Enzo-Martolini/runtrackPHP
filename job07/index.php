<?php

for ($i=1; $i <= 100; $i++) {
    if ($i%5===0 && $i%3===0){
        echo "FizzBuzz " . $i . "\n";
    }
    else if ((int)$i%3===0){
        echo "Fizz " . $i . "\n";
    } else if ($i%5===0) {
        echo "Buzz " . $i . "\n";
    }  
}