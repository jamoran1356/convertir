<?php

/* Sustituye los valores en una cadena por 0 y 1, 
donde 0 son las vocales y 1 las consonantes */

function strplc($string){
    $vowels = array("a","e","i","o","u","y");
    $cons = array("b","c","d","f","g","h","i","j","k","l","m","n","p","q","r","s","t","u","v","w","x","z");
    $string = str_replace($vowels,0,$string);
    $string = str_replace($cons,1,$string);
    echo $string;
}

?>