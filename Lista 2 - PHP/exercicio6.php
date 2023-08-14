<?php
$num1= $_POST["valorA"];
$num2= $_POST["valorB"];

if($num1 > $num2 ){
    echo $num1 , ' ' , $num2;
}else{
    echo $num2 , ' ' , $num1;
}


?>