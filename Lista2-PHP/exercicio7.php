<?php
$num1= $_POST["valorA"];
$num2= $_POST["valorB"];

if($num1 > $num2 ){
    echo $num1 , ' é maior que ' , $num2;
}else{
    echo $num1 , ' é menor que ' , $num2;
}


?>