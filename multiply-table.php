<?php
$m = 10;
echo "<table border='1'>";
echo "<tr>";
echo "<caption>Table de multiplication par ".$m."</caption>";
echo "<th></th>";

$i = 1;
while ($i<=$m){
    echo "<th style='background-color: #45faff'>".$i."</th>";
    $i++;
}
echo "</tr>";
$x = 1 ;
while($x<=$m){
    echo "<th style='background-color: rosybrown'>".$x."</th>";
    $y = 1;
    while($y<=$m){
        echo "<td style='background-color: chocolate'>".($x*$y)."</td>";
        $y++;
    }
    echo "</tr>";
    $x++;
}
