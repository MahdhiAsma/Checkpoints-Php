<?php
function odd($var)
{
    // retourne lorsque l'entrée est impaire
    return($var & 1);
}

function even($var)
{
    // retourne lorsque l'entrée est paire
    return(!($var & 1));
}

function decompose(  $tab= array()){
    echo "Impair :\n";
    print_r(array_filter($tab, "odd"));
    echo "Pair :\n";
    print_r(array_filter($tab, "even"));
}
$z=array(1,2,3,5,4,0);

decompose($z);