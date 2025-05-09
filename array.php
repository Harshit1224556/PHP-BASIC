<?php

$student = [
"name" => "John Smith",
"age"  => 20,
"university" => "ABC University",

];

if(array_key_exists("age",$student)){
    echo "Age exist in the student array. ";
}

else{
    echo "Age does not exist in the student array. ";
}

?>