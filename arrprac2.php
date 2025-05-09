<?php

$temparr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);


$average = array_sum($temparr)/count($temparr);
ini_set('precision', 4); 
echo "Average Temperature is : ".$average;
echo "\n";


$uniquearr = array_unique($temparr);
sort($uniquearr);

echo "List of five  lowest temperatures : \n";

for($i=0;$i<5;$i++){
    echo $uniquearr[$i];
    echo "\n";
}




rsort($uniquearr);
echo "List of five  highest temperatures : \n";


for($i=0;$i<5;$i++){
    echo $uniquearr[$i];
    echo "\n";
}
?>