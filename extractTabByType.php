<?php

function extractTabByType ($tab, $type) {
    $res=[];

    foreach($tab as $i)
    {
        if (gettype($i)!=$type){
            array_push($res,$i);


        }

    }
    print_r($res);

}
$tab=array (5,2,0,"bbb");
$type="string";
extractTabByType($tab, $type);