<?php

function occurence($str, $char) {
    $occurenceChar = 0;

    for ($i =0; isset($str[$i]); $i++) {
        if ($str[$i]===$char){
            $occurenceChar++; 
        }
    }

    echo $occurenceChar;


}

occurence("Bonjour", "o")
?>