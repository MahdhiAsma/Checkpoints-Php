<?php
function produit(){
    $nbarg = func_num_args();
    $som=1;
    for ($i=0; $i <$nbarg; $i++) {
        $som *= func_get_arg($i) ;
    }
    return $som;
}
echo "le produit est : ", produit (2, 7 ), "<br />";

function prod(...$param){
    $prod=1;
    for ($i=0; $i <count($param); $i++) {

        $prod *=$param[$i] ;
    }
    return $prod;
}
echo "le produit par deuxieme maniere est : ", prod(2,7 ), "<br />";
