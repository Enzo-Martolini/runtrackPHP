<?php 
session_start();

if (!isset($_COOKIE['nbVisite'])){
    setcookie("nbVisite", 0);
}

$nbVisite = $_COOKIE['nbVisite'] + 1;

setcookie("nbVisite", $nbVisite);


var_dump($_COOKIE['nbVisite']);