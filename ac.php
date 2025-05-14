<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

 echo "<h2> Received Information </h2> <br>";
    echo "$name <br>";
    echo "$email <br>";
    echo "$password <br>";
}

?>