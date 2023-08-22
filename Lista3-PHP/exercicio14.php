<?php
$num1= $_POST["numero1"];

$soma= 0;


for( $i = 1; $i < $num1; $i++){


    if($num1 % $i == 0){
        $soma += $i;
        echo $i , '<br>';
     }

     

 
}

echo '<br>Valor da soma final: ' , $soma;

?>