<?php
$ch='Abcguo';
$foo = 'hElLo woRlD!';
echo ucwords(strtolower($foo)).'<br/>';

$tab = str_split($foo);
 foreach($tab as $val){
    echo $val . '<br/>';

 }

$tab = str_split($ch);
$arr= str_split($foo);
$i=0;
$max=max(strlen($ch),strlen($foo));
while($i<$max){
    if (strcasecmp(substr($ch, $i),substr($foo, $i))<0){
        echo('premiere est plus grande'); break;}
     elseif (strcasecmp(substr($ch, $i),substr($foo, $i))>0){
         echo('deuxieme est plus grande'); break;
         }
    $i++;
    if($i==$max)
    {echo('egaux'); break;}
}