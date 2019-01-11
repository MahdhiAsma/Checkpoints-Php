<?php
function compare($x,$y){
    if ($x>$y)
        echo 'premier '."<br>";
    elseif ($y>$x)
        echo 'second '."<br>";
    elseif ($y=$x)
        echo 'equales'."<br>";
}
echo "comparaison de 5 et 3.".compare(5,3)."<hr>";
echo "comparaison de 1 et 3.".compare(1,3)."<hr>";
echo "comparaison de 5 et 5.".compare(5,5)."<hr>";