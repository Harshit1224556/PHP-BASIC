<?php


// $day = readline('Enter the day: ');
echo "<h1>Control statement in php</h1>";
echo "<h2>If else in php</h2>";
$age = 10;
if($age > 18){
echo "the person is eligible to vote<br>";
}
else{
echo "the person is not eligible to vote<br>";
}

$a = 95;
if($a>90){
    echo "Grade A+<br>";
}
else if($a>=75){
    echo "Grade A<br>";
}
else if($a>=50){
    echo "Grade B<br>";
}
else{
    echo "Grade fail<br>";
}
$day = 3;
switch($day){

case 1:
    echo "Today is Monday<br>";
    break;
case 2:
    echo "Today is tuesday<br>";
    break;
case 3:
    echo "Today is wednesday<br>";
    break;
case 4:
    echo "Today is thrusday<br>";
case 5:
    echo "Today is friday<br>";
    break;
case 6:
    echo "Today is saturday<br>";
    break;
case 7:
    echo "Today is sunday<br>";
    break;
default:
echo "Invalid day number<br>";



}

echo "<h2>while loop </h2><br>";
$counter = 1;
while($counter<=5){
    echo "counter: $counter<br>";
  
    $counter++;
}
$counter1 = 1;
echo "<h2> do while loop </h2><br>";
do{
    echo "counter: $counter1<br>";
    
    $counter1++;
}
while($counter1<=5);


echo "<h2> For loop </h2><br>";
for($i = 1;$i<=5;$i++){
    echo "Counter: $i <br>";
}


echo "<h2> For each loop </h2><br>";
$fruits = array("Apple","Banana","Cherry");
foreach($fruits as $fruit){
    echo "Fruit:  $fruit<br>";
}

echo "<h2> LOOPING THROUGH ASSOCIATIVE ARRAY</h2><br>";
$students = array("john"=> 85,"Jane"=>92,"Bob"=>74);
echo "Displaying student names and marks<br>";
foreach($students as $name => $marks){
    echo "Student: $name,Marks: $marks <br>";
}
echo "<h2>using break and continue</h2><br>";
echo "<b>using break</b> <br>";
for($i=1;$i<=5;$i++){
    if($i==3){
        echo "Breaking at $i<br>";
        break;
    }
    echo "Iteration: $i<br>";
}
echo "<b>using Continue</b> <br>";
for($i=1;$i<=5;$i++){
    if($i==3){
        echo "Skipping $i <br>";
        continue;
    }
 echo "Iteration: $i<br>";
}

echo "<h2>Ternary operator</h2> <br>";
$score = 80;
$result = ($score>=50)? "pass":"fail";
echo $result;
?>