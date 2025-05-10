<?php

$n = (int)readline("Enter a number: ");

function isPrime($n){
    
    if($n<=1){
        return false;
    }
    else{
        for($i=2;$i<$n;$i++){
            if($n%$i==0){
                return false;
            }
        }
        return true;
    }
}

if(isPrime($n)){
    echo "Prime";
}
else{
    echo "Not Prime";
}





?>