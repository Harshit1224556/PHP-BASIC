<?php


setcookie("favfood","pizza",time()+86400);
if(isset($_COOKIE["favfood"])){
    echo "Plz order your {$_COOKIE['favfood']} ";

}

else{
    echo "i dont know your favourite food";
}




?>