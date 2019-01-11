<?php
$i=0;
$arr=[];
$arr2=[];
while($i<10){
    $v=rand(1,63);
    array_push($arr,$v);
    $i++;
}

print_r($arr);
echo "<br>";
function div($n){
    return($n/10);
}
$b = array_map("div", $arr);
print_r($b);
function sinus($n){
    return(sin($n));
}
$sinb = array_map("sinus", $b);

$c = array_combine($b, $sinb);
echo '<br>';
print_r($c);
