<?php
function sinus($val , $unite ){
    if ($unite=='g'){
        $val=$val*3.14/200;
        echo (sin($val));
    }
    elseif ($unite=='d'){
        echo (sin(deg2rad($val)));
    }
    else {
        echo (sin($val));
    }

}
sinus(90 ,'d');
sinus(90 ,'r');
sinus(90 ,'g');