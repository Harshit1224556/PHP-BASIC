<?php


function &getCounter(){
    static $count = 0;
    return $count;
}


$counter = &getCounter();
$counter += 10;
echo getCounter();


?>
