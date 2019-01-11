<?php
$recherche = 97;
$text = 'Ceci est un testaaa';
function compteur($recherche,$text){
    echo( '<b>"' . $text . '"</b> contient <b>' . substr_count($text, chr($recherche)) . '</b> fois le caractère <b>' .chr($recherche). '</b>'.'</b> du code Ascii <b>'.$recherche.'<b>');
}

function compteurocc( $text){
    foreach (count_chars($text, 1) as $i => $val)
    {
        echo 'Il y a <b>' . $val . '</b> occurrence(s) de <b>' . chr($i) . '</b> dans <b>"' . $text . '"</b><br>';
}


}
compteur($recherche,$text);
compteurocc( $text);