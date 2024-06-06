<?php 
session_start();

if (!isset($_SESSION['nbVisite'])){
    $_SESSION['nbVisite'] = 0;
}

function ajouterVisite(){
    $_SESSION['nbVisite']++;
}

ajouterVisite();

echo $_SESSION['nbVisite'];