<?php
$y=1993;
while($y<2011){
    if( date("l",mktime(00,00,00,8,13,$y))=='Wednesday' OR date("l",mktime(00,00,00,01,05,$y))=='Monday'){
        echo  "weekend prolongée ". "<br>";
    }
     else{
         echo "désolée". "<br>";
    }

    $y++;
}
$jour=array(
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi"
);
echo '---------------'."<br>";

echo $jour[date("w",mktime(00,00,00,05,03,1993))];

