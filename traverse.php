<?php
$numbers = array(10,20,30,40,50);
for($i=0;$i<count($numbers);$i++){

 echo "numbers[$i] = $numbers[$i]\n";
}


// reverse the array


$i =count($numbers) -1;

while($i>=0){
    echo "numbers[$i]=$numbers[$i]";
    $i--;
}


?>