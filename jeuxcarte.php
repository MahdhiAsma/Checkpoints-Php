<?php

$cardlist = array(
    1=> array("As", '<img src="./cartes/as.jpg" />'),
    2=>array ("Dos",'<img src="./cartes/dos.png />'),
    3=>array("Tres",'<img src="./cartes/tres.jpg" />'),
    4=>array("Quatro",'<img src="./cartes/quatro.png" />'),
    5=>array("Cinco",'<img src="./cartes/cinco.jpg" />'),
    6=>array("Seis",'<img src="./cartes/seis.png" />'),
    7=>array("Siete",'<img src="./cartes/siete.jpg" />'),
    8=>array("Ocho",'<img src="./cartes/ocho.jpg" />'),
    9=>array("Neuve",'<img src="./cartes/neuve.png" />'),
    10=>array("Ten",'<img src="./cartes/ten.jpg" />'),
);
$player1=[] ;
$player2=[] ;
$randomkeyplayer1=0;
$randomkeyplayer2=0;
$score1=0;
$score2=0;
$i=0;
while($i<5){
    $randomkeyplayer1 = array_rand($cardlist,1);
    $randomkeyplayer2 = array_rand($cardlist,1 );
    print_r($cardlist [$randomkeyplayer1][0]);
    echo'  player1:'."<br>";
    echo $cardlist [$randomkeyplayer1][1];
    echo "<br>";
    print_r($cardlist[$randomkeyplayer2][0]);
    echo '  player2:'."<br>";
    echo $cardlist[$randomkeyplayer2][1];

    if ($randomkeyplayer1> $randomkeyplayer2){
        echo "<hr>";
        print_r("Player One Win");
        echo "<br>";
        $score1+=1;
        echo" Player One score:". $score1."<br>";
        echo" Player Two score:".$score2."<br>";
    }
    else if ($randomkeyplayer1<$randomkeyplayer2){
        echo "<hr>";
        print_r("Player Two Win");
        echo "<br>";
        $score2+=1;
        echo" Player One score:". $score1."<br>";;
        echo" Player Two score:".$score2."<br>";;
    }
    else{
        echo "<hr>";
        print_r("Equality");
        echo "<br>";
        echo" Player One score:". $score1."<br>";
        echo" Player Two score:".$score2."<br>";

    }

    $i++;
}
echo "<hr>";
if($score1 <$score2){ echo "Player 2 is the big winner";}
elseif ($score1 >$score2) { echo "Player 1 is the big winner";}
else {echo "Equality";}