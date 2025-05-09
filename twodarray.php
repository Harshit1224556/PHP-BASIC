<?php

// creating a 2D array

$students = [

["name"=> "Alice","age"=> 20,"grade"=> "A"],
["name"=> "Bob","age"=> 22,"grade"=> "B"],
["name"=> "Charlie","age"=> 19,"grade"=> "A+"]

];
echo $students[0]["name"];
echo $students[2]["grade"];
foreach($students as $student){


    echo "Name: ".$student["name"] . ", Age: " .$student["age"] .",Grade: ".$student["grade"] . "<br>";
}





?>